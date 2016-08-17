<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsWithCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_with_categories', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->index(['goods_id', 'category_id']);
        });

        Schema::table('goods_with_categories', function($table) {
            $table->foreign('goods_id')->references('id')->on('goods')->onDelete('cascade');
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
        Schema::table('goods_with_categories', function($table) {
            $table->dropForeign(['goods_id']);
            $table->dropForeign(['category_id']);
        });
        Schema::drop('goods_with_categories');
    }
}
