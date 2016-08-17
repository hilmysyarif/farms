<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('parent_id')->unsigned();
            $table->integer('sort_order')->unsigned();
            $table->timestamps();
        });

//        Schema::table('categories', function ($table) {
//            $table->foreign('parent_id')->references('categories')->on('id')->onDelete('set null');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('categories', function ($table) {
//            $table->dropForeign(['parent_id']);
//        });
        Schema::drop('categories');
    }
}
