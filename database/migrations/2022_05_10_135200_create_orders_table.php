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
            $table->string('orderAddress1')->nullable();
            $table->string('orderAddress2')->nullable();
            $table->char('orderCity')->nullable();
            $table->char('orderStatus')->default(0)->nullable();
            $table->char('orderCountry')->nullable();
            $table->tinyInteger('phone')->nullable()->max(14);
            $table->string('fax')->nullable();
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
