<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliders extends Migration
{
    /**
     * Run the migrations.!
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('description', 255);
            $table->string('url', 255);
            $table->string('img', 255);
            $table->tinyInteger('sort_order');
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
        Schema::drop('sliders');
    }
}
