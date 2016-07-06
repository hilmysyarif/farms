<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyBatch1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('cart', function($table) {
            $table->foreign('goods_attr_id')->references('id')->on('goods_attr')->onDelete('cascade');
        });

        Schema::table('addresses', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelte('cascade');
        });

        Schema::table('addresses', function($table) {
            $table->foreign('zone_id')->references('id')->on('zone')->onDelte('cascade');
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
            $table->dropForeign(['goods_attr_id']);
        });

        Schema::table('addresses', function($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['zone_id']);
        });
    }
}
