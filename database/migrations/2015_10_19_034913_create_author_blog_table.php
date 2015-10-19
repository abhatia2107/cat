<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_blog', function(Blueprint $table) {
            $table->integer('author_id')->foreign('author_id')->references('id')->on('authors');
            $table->integer('blog_id')->foreign('blog_id')->references('id')->on('blogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('author_blog');
    }
}
