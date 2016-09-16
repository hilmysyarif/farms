<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_goods', function(Blueprint $table) {
            $table->increments('id');
            $table->string('url')->unique();
            $table->integer('goods_id')->unsigned(); //TODO: foreign key with goods.
        });

        Schema::table('gallery_goods', function($table) {
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
        Schema::table('gallery_goods', function($table) {
            $table->dropForeign(['goods_id']);
        });
        
        Schema::drop('gallery_goods');
    }
}
