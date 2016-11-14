<?php

namespace App\Http\Controllers\Front;

use App\Models\Order;
use Illuminate\Http\Request;

use App\Http\Requests;

class CashierController extends FrontController {

    public function index($no) {
        $this->breadcrumbs[] = [
            'url' => '',
            'name' => trans('common.cashier')
        ];

        $info = Order::amountByNo($no);
        return view('front/cashier',
            [
                'amount' => $info->amount,
                'breadcrumbs' => $this->breadcrumbs
            ]);
    }
}
