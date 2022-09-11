<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->float('orderAmount')->nullable();
            $table->string('orderAddress1')->length(255)->nullable();
            $table->char('orderCity')->length(255)->nullable();
            $table->char('orderStatus')->default(0)->nullable();
            $table->char('orderCountry')->nullable();
            $table->tinyInteger('phone')->nullable()->max(14);
            $table->string('fax')->nullable();
            $table->float('total_price')->nullable();
            $table->float('zipcode')->nullable();
            $table->float('trackingNumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
