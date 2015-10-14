<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMockhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mockhistories', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->foreign('user_id')->references('id')->on('users');
            $table->integer('mock_id')->foreign('mock_id')->references('id')->on('exammocks');
            $table->decimal('marks',10,2);
            $table->decimal('aggregatepercentile',10,2);
            $table->decimal('percentage',10,2);
            $table->integer('attemptedquestions');
            $table->integer('unattemptedquestions');
            $table->integer('wronganswers');
            $table->integer('correctanswers');
            $table->decimal('accuracy',10,2);
            $table->integer('timetaken');
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
        Schema::drop('mockhistories');
    }
}
