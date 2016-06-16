<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsAttrCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_attr_cat', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->integer('goods_attr_name_id'); //TODO: foreign key with goods_attr_name.
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
        Schema::drop('goods_attr_cat');
    }
}
