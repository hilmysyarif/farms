<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtrcatAttrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atrcat_attr', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('atrcat_id')->unsigned();
            $table->integer('attr_id')->unsigned();
            $table->index(['atrcat_id', 'attr_id']);
        });

        Schema::table('atrcat_attr', function($table) {
            $table->foreign('atrcat_id')->references('id')->on('atrcat')->onDelete('cascade');
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
        Schema::table('atrcat_attr', function($table) {
            $table->dropForeign(['atrcat_id']);
            $table->dropForeign(['attr_id']);
        });

        Schema::drop('atrcat_attr');
    }
}
