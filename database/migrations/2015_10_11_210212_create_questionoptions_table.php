<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('questionoptions', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('question_id')->foreign('question_id')->references('id')->on('questions');
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
        Schema::drop('questionoptions');
    }
}
