<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title', 128);
            $table->string('author', 64);
            $table->text('content');
            $table->string('icon', 255);
            $table->integer('category_id')->unsigned();
            $table->tinyInteger('status')->unsigned();
            $table->timestamps();
        });

        Schema::table('articles', function($table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function($table) {
            $table->dropForeign(['category_id']);
        });
        Schema::drop('articles');
    }
}
