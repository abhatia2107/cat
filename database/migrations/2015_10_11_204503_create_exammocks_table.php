<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExammocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('exammocks', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('template_id')->foreign('template_id')->references('id')->on('templatetypes');
                $table->string('title');
                $table->integer('noofquestions');
                $table->integer('time');
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
        Schema::drop('exammocks');
    }
}
