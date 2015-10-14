<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionstatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('questionstatuses', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->integer('status');
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
        Schema::drop('questionstatuses');
    }
}
