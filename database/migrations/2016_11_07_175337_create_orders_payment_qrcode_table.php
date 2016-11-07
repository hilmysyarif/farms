<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersPaymentQrcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_payment_qrcode', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no', 64);
            $table->string('aiipay_qrcode', 255);
            $table->string('wechat_qrcode', 255);
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
        Schema::drop('orders_payment_qrcode');
    }
}
