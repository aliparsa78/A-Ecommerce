<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')->fillable();
            $table->char('name')->nullable();
            $table->float('weight')->nullable();
            $table->char('size')->nullable();
            $table->char('color')->nullable();
            $table->longText('desctiption')->nullable();
            $table->longText('longdescription')->nullable();
            $table->float('original_price')->nullable();
            $table->float('selling_price')->nullable();
            $table->string('image')->nullable();
            $table->float('tax')->nullable();
            $table->tinyInteger('qty')->nullable();
            $table->tinyInteger('live')->nullable();
            $table->boolean('type')->default(0)->nullable();
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
        Schema::dropIfExists('products');
    }
}
