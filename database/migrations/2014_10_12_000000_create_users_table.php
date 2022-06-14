<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->min(20);
            $table->string('lastName')->nullable();
            $table->string('email')->unique();
            $table->char('country')->max(255)->nullable();
            $table->char('city')->max(255)->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('phone')->nullable();
            $table->string('profile')->nullable();
            $table->string('verificationCode')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->min(8);
            $table->string('role_as')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
