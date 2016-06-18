<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_gallery', function(Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->integer('goods_id')->unsigned(); //TODO: foreign key with goods.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods_gallery');
    }
}
