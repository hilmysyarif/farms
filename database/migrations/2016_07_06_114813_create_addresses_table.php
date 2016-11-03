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
            $table->integer('zone_id')->unsigned()->comment('code of PCD'); // Id of zone, this made up of province, city, district etc.
            $table->string('detail', 128)->default(0);
            $table->string('receiver', 64);
            $table->string('contact', 32)->comment('contact way');
            $table->boolean('default')->default(false);
            $table->timestamps();
        });

        Schema::table('addresses', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelte('cascade');
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
        });

        Schema::drop('addresses');
    }
}
