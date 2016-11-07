<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    public static function amountByNo($no) {
        $row = Order::where('no', $no)->first();
        return $row;
    }

    public static function fetchMyOrders($user_id, $page = 1, $size = 10) {
        return Order::where('user_id', $user_id)->skip(($page - 1) * $size)->take($size)->get();
    }
}
