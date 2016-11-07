<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersPaymentQrcode extends Model {

    public function store($order_no, $alipay_qrcode, $wechat_qrcode) {
        $this->order_no = $order_no;
        $this->alipay_qrcode = $alipay_qrcode;
        $this->wechat_qrcode = $wechat_qrcode;

        return $this->save();
    }

    /**
     * Retrieve the row identified by order_no.
     *
     * @param $order_no
     * @return mixed
     */
    public static function retrieveByOrderNo($order_no) {
        return OrdersPaymentQrcode::where('order_no', $order_no)->first();
    }
}
