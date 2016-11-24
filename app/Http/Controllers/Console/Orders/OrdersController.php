<?php

namespace App\Http\Controllers\Console\Orders;

use App\Http\Controllers\Console\ConsoleController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\OrderController;
use App\Models\Address;
use App\Models\Express;
use App\Models\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends ConsoleController
{
    public function __construct(){
        parent::__construct();
        $this->tabs = [
            [
                'url' => url('/orders'),
                'name' => '订单列表'
            ]
        ];
    }

    public function index($page = 1) {
        $recordsCount = Order::count();
        $pages = FrontController::pages('/orders', $recordsCount, $page);

        $list = Order::fetchBlock($page);
        foreach ($list as $k => $v) {
            $list[$k]->status = Order::status()[$v->status];
        }

        return view('console/orders_list', [
            'tabs' => $this->tabs,
            'active' => 0,
            'pages' => $pages,
            'list' => $list
        ]);
    }

    public function view($id) {
        $this->tabs[] = [
            'url' => url('/order/view/'.$id),
            'name' => trans('order.view_order')
        ];

        $row = Order::find($id);

        // prepare address information.
        $pcd = include('js/pcd.php');
        $address = Address::fetchDefault($row->user_id);
        $fullAddresses = OrderController::fullAddress($address->zone_id, $pcd);
        $fullAddresses = array_reverse($fullAddresses);
        $address->pcd = implode(' ', $fullAddresses);

        // prepare express information.
        $express = Express::default();

        // prepare goodsInfo.
        // TODO: need update logic of checkout order.


//        $test =  function (Request $request, Cart $cart, AttrGoods $attrGoods) {
//            $pcd = include('js/pcd.php');
//            $address = Address::fetchDefault($request->user()->id);
//            $fullAddresses = $this->fullAddress($address->zone_id, $pcd);
//            $fullAddresses = array_reverse($fullAddresses);
//            $address->pcd = implode(' ', $fullAddresses);
//
//            // prepare express info.
//            $express = Express::default();
//
//            // prepare goods info.
//            $items = $cart->items($request);
//            $goods = CartController::extractGoods($items);
//
//            return view('front/order', [
//                'navHtml' => $this->navHtml,
//                'address' => $address,
//                'goods' => $goods,
//                'express' => $express,
//                'breadcrumbs' => $this->breadcrumbs
//            ]);
//        };


        return view('console/order_view', [
            'tabs' => $this->tabs,
            'active' => 1,
        ]);
    }

    public function edit() {
        return view('console/order_edit',[
            'tabs' => $this->tabs,
            'active' => 0
        ]);
    }
}
