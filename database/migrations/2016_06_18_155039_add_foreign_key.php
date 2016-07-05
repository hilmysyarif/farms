<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods', function($table) {
            $table->foreign('cover_id')->references('id')->on('goods_gallery')->onDelete('cascade');
        });

        Schema::table('goods_gallery', function($table) {
            $table->foreign('goods_id')->references('id')->on('goods')->onDelete('cascade');
        });

        Schema::table('goods_attr_cat', function($table) {
            $table->foreign('goods_attr_name_id')->references('id')->on('goods_attr_name')->onDelete('cascade');
        });

        Schema::table('goods_comments', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('goods_attr', function($table) {
            $table->foreign('goods_id')->references('id')->on('goods')->onDelete('cascade');
        });

        Schema::table('goods_attr', function($table) {
            $table->foreign('goods_attr_name_id')->references('id')->on('goods_attr_name')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goods', function($table) {
            $table->dropForeign(['cover_id']);
        });

        Schema::table('goods_gallery', function($table) {
            $table->dropForeign(['goods_id']);
        });

        Schema::table('goods_attr_cat', function($table) {
            $table->dropForeign(['goods_attr_name_id']);
        });

        Schema::table('goods_comments', function($table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('goods_attr', function($table) {
            $table->dropForeign(['goods_id']);
            $table->dropForeign(['goods_attr_name_id']);
        });
    }
}
