<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('examsections', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('setype')->foreign('setype')->references('id')->on('subexamtypes');
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
        Schema::drop('examsections');
    }
}
