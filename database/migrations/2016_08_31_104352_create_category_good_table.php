<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryGoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_good', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('good_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->index(['good_id', 'category_id']);
        });

        Schema::table('category_good', function($table) {
            $table->foreign('good_id')->references('id')->on('goods')->onDelete('cascade');
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
        Schema::table('category_good', function($table) {
            $table->dropForeign(['good_id']);
            $table->dropForeign(['category_id']);
        });
        Schema::drop('category_good');
    }
}
