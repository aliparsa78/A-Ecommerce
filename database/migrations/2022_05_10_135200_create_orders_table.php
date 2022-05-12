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
            $table->float('orderAmount');
            $table->string('orderAddress1');
            $table->string('orderAddress2');
            $table->char('orderCity');
            $table->char('orderStatus');
            $table->char('orderCountry');
            $table->tinyInteger('phone');
            $table->string('fax');
            $table->float('trackingNumber');
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
