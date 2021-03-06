<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttrGoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr_goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned(); // TODO: foreign key with goods.
            $table->integer('attr_id')->unsigned(); // TODO: foreign key with goods_atr_name.
            $table->string('value');
            $table->double('price', 15, 2)->comment('extra price for this attribute, can be negative, depend on base-price');
            $table->tinyInteger('sale')->default(0); // 0: Off sale. 1: On sale
            $table->timestamps();
        });

        Schema::table('attr_goods', function($table) {
            $table->foreign('goods_id')->references('id')->on('goods')->onDelete('cascade');
            $table->foreign('attr_id')->references('id')->on('attr')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attr_goods', function($table) {
            $table->dropForeign(['goods_id']);
            $table->dropForeign(['attr_id']);
        });

        Schema::drop('attr_goods');
    }
}
