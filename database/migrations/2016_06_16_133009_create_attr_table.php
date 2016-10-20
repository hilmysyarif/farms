<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->string('suffix', 32)->default('');
            $table->string('type', 16)->default('text');
            $table->timestamps();
            $table->index(['name', 'suffix']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attr');
    }
}
