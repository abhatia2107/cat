<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('questions', function(Blueprint $table)
            {
                $table->increments('id');
                $table->text('title');
                $table->text('description');
                $table->string('image');
                $table->text('totalhtml');
                $table->text('solution');
                $table->integer('answer');
                $table->integer('status')->foreign('status')->references('id')->on('masterstatuses');
                $table->integer('type')->foreign('type')->references('id')->on('questiontypes');
                $table->integer('created_by');
                $table->integer('modified_by');
                $table->boolean('passage');
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
        Schema::drop('questions');
    }
}
