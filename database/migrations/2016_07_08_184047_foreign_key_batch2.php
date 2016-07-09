<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyBatch2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods_with_categories', function($table) {
            $table->foreign('goods_id')->references('id')->on('goods')->onDelete('cascade');
            $table->foreign('goods_category_id')->references('id')->on('goods_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goods_with_categories', function($table) {
            $table->dropForeign('goods_id');
            $table->dropForeign('goods_category_id');
        });
    }
}
