<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('attr_goods_id')->unsigned();
            $table->tinyInteger('number');
            $table->timestamps();
        });

        Schema::table('cart', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('attr_goods_id')->references('id')->on('attr_goods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart', function($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['attr_goods_id']);
        });

        Schema::drop('cart');
    }
}
