<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMocksectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('mocksections', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('esec_id');
$table->integer('noofquestions');
$table->integer('noofmarks');
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
        Schema::drop('mocksections');
    }
}
