<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsubtopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('examsubtopics', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('topic')->foreign('topic')->references('id')->on('examtopics');
                $table->string('name');
                $table->integer('created_by');
                $table->integer('modified_by');
                $table->integer('status')->foreign('status')->references('id')->on('masterstatuses');
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
        Schema::drop('examsubtopics');
    }
}
