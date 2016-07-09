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
            $table->integer('goods_category_id')->unsigned();
            $table->index(['goods_id', 'goods_category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods_with_categories');
    }
}
