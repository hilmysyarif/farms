<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('cover_url');
            $table->integer('sort');
            $table->integer('article_id')->unsigned()->default(0);
            $table->timestamps();
        });

        Schema::table('goods', function($table) {
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goods', function($table) {
            $table->dropForeign(['article_id']);
        });

        Schema::drop('goods');
    }
}
