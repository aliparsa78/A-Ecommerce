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
            $table->Integer('user_id');
            $table->float('orderAmount');
            $table->string('orderAddress1');
            $table->string('orderAddress2');
            $table->string('orderCity');
            $table->string('orderStatus');
            $table->string('orderCountry');
            $table->string('phone');
            $table->string('fax');
            $table->string('trackingNumber');
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
