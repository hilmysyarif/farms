<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('stars');
            $table->longText('body');
            $table->integer('user_id')->unsigned(); // TODO: foreign key with users.
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
        Schema::drop('goods_comments');
    }
}
