<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('templatetypes', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('setype_id')->foreign('setype_id')->references('id')->on('subexamtypes');
                $table->string('name');
                $table->decimal('eachmarkcorrect',10,2);
                $table->decimal('eachmarknegative',10,2);
                $table->integer('noofquestions');
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
        Schema::drop('templatetypes');
    }
}
