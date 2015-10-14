<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestiontypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('questiontypes', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('template_id')->foreign('template_id')->references('id')->on('templatetypes');
                $table->string('name');
                $table->integer('created_by');
                $table->integer('modified_by');
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
        Schema::drop('questiontypes');
    }
}
