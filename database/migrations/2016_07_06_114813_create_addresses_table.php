<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('zone_id')->unsigned(); // Id of zone, this made up of province, city, district etc.
            $table->integer('detail')->default(0);
            $table->boolean('default')->default(false);
            $table->timestamps();
        });

        Schema::table('addresses', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelte('cascade');
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

        Schema::table('addresses', function($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['zone_id']);
        });

        Schema::drop('addresses');
    }
}
