<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('stars');
            $table->longText('body');
            $table->integer('user_id')->unsigned(); // TODO: foreign key with users.
            $table->integer('goods_id')->unsigned();
            $table->timestamps();

            $table->index(['user_id', 'goods_id']);
        });

        Schema::table('goods_comments', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('goods_id')->references('id')->on('goods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goods_comments', function($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['goods_id']);
        });
        
        Schema::drop('goods_comments');
    }
}
