<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('imageurl');
            $table->string('password', 60);
            $table->string('confirmation_code',90)->nullable();
            $table->boolean('confirmed')->default(0);
            $table->integer('login_type')->foreign('login_type')->references('id')->on('logintypes');
            $table->integer('cat_status')->foreign('cat_status')->references('id')->on('cat_statuses');
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
        Schema::drop('users');
    }
}
