<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMockhistorydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('mockhistorydetails', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('history_id')->foreign('history_id')->references('id')->on('mockhistories');
            $table->integer('question_id')->foreign('question_id')->references('id')->on('questions');
            $table->string('attempted');
            $table->integer('questionstatus')->foreign('questionstatus')->references('id')->on('questionstatuses');
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
        Schema::drop('mockhistorydetails');
    }
}
