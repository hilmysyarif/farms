<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    static $SUBMITTED = 0;
    static $CANCELLED = -1;
    static $DELETED = -2;
    static $PAIED = 1;
    static $PACKAGING = 2;
    static $SHIPPING = 3;
    static $FINISHED = 4;
    static $EXCHANGING = 5; // exchange goods
    static $RETURNING = 6;


    public static function status() {
        return [
            self::$SUBMITTED => trans('order.submitted'),
            self::$CANCELLED => trans('order.cancelled'),
            self::$DELETED => trans('order.deleted'),
            self::$PAIED => trans('order.paied'),
            self::$PACKAGING => trans('order.packaging'),
            self::$SHIPPING => trans('order.shipping'),
            self::$FINISHED => trans('order.finished'),
            self::$EXCHANGING => trans('order.exchanging'),
            self::$RETURNING => trans('order.returning')
        ];
    }

    public static function amountByNo($no) {
        $row = Order::where('no', $no)->first();
        return $row;
    }

    public static function fetchMyOrders($user_id, $page = 1, $size = 10) {
        return Order::where('user_id', $user_id)->skip(($page - 1) * $size)->take($size)->get();
    }

    public static function fetchBlock($page = 1, $size = 10) {
        return self::skip(($page - 1 * $size))->take($size)->get();
    }

}
