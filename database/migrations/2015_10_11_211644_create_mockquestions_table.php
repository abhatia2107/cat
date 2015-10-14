<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMockquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('mockquestions', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('section_id')->foreign('section_id')->references('id')->on('mocksections');
            $table->integer('question_id')->foreign('question_id')->references('id')->on('questions');
            $table->decimal('eachmarkcorrect',10,2);
            $table->decimal('eachmarknegative',10,2);
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
        Schema::drop('mockquestions');
    }
}
