<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsAttr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_attr', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned(); // TODO: foreign key with goods.
            $table->integer('goods_attr_name_id')->unsigned(); // TODO: foreign key with goods_atr_name.
            $table->string('value');
            $table->tinyInteger('type'); // 0: text, 1: color, 2: image
            $table->double('price', 15, 2);
            $table->tinyInteger('sale'); // 0: Off sale. 1: On sale
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
        Schema::drop('goods_attr');
    }
}
