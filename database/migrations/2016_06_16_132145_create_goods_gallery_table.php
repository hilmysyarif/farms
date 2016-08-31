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
            $table->string('url')->unique();
            $table->integer('goods_id')->unsigned(); //TODO: foreign key with goods.
        });

        Schema::table('goods_gallery', function($table) {
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
        Schema::table('goods_gallery', function($table) {
            $table->dropForeign(['goods_id']);
        });
        
        Schema::drop('goods_gallery');
    }
}
