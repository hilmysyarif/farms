<?php

namespace App\Http\Controllers\Front;

use App\Models\Address;
use App\Models\AttrGoods;
use App\Models\Cart;
use App\Models\Express;
use App\Models\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class OrderController extends FrontController {

    public function __construct() {
        parent::__construct();

        $this->breadcrumbs[] = [
            'url' => url('/checkout'),
            'name' => trans('common.confirm_order')
        ];
    }

    public function index(Request $request) {
        // update cart first.
        $cart_ids = $request->cart_id;
        $numbers = $request->number;

        Cart::updateQuantity($cart_ids, $numbers);

        return redirect('/checkout');
    }

    public function checkout(Request $request, Cart $cart, AttrGoods $attrGoods) {
        $pcd = include('js/pcd.php');
        $address = Address::fetchDefault($request->user()->id);
        $fullAddresses = self::fullAddress($address->zone_id, $pcd);
        $fullAddresses = array_reverse($fullAddresses);
        $address->pcd = implode(' ', $fullAddresses);

        // prepare express info.
        $express = Express::default();

        // prepare goods info.
        $items = $cart->items($request);
        $goods = CartController::extractGoods($items);

        return view('front/order', [
            'navHtml' => $this->navHtml,
            'address' => $address,
            'goods' => $goods,
            'express' => $express,
            'breadcrumbs' => $this->breadcrumbs
        ]);
    }


    public static function fullAddress($id, $pcd, $res = []) {
        $res[] = $pcd[$id]['name'];
        if ($pcd[$id]['pid'] != 0) {
            return self::fullAddress($pcd[$id]['pid'], $pcd, $res);
        }
        return $res;
    }


    /**
     * Confirm the order, this will redirect user to cashier.
     *
     * @param Request $request
     * @param Cart $cart
     * @param AttrGoods $attrGoods
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function confirm(Request $request, Cart $cart, AttrGoods $attrGoods) {
        // express
        $express = Express::default();

        // prepare goods info.
        $items = $cart->items($request);
        $goods = CartController::extractGoods($items);

        // get amount.
        $amount = 0;
        foreach ($goods as $v) {
            $amount += $v['info']['single_total_price'] * $v['info']['number'];
        }
        $amount += $express->shippingFee;

        // generate order number.
        $no = $request->user()->id.'T'.time();

        // write into orders.
        $carItems = $items->toArray();
        $time = date('Y-m-d');

        // data for order.
        $data = [
            'no' => $no,
            'user_id' => $request->user()->id,
//            'atrgids' => $v['atrgids'],
//            'number' => $v['number'],
            'address_id' => $request->address_id,
            'express_id' => 1, // This is the default express.
            'amount' => $amount,
            'created_at' => $time,
            'updated_at' => $time
        ];

        DB::beginTransaction();
        $order_id = DB::table('orders')->insertGetId($data);
        $cartAffected = Cart::clear($request->user()->id);

        $dataOrderItems = [];
        foreach ($carItems as $v) {
            $dataOrderItems[] = [
                'order_id' => $order_id,
                'order_no' => $no,
                'atrgids' => $v['atrgids'],
                'number' => $v['number'],
                'created_at' => $time,
                'updated_at' => $time
            ];
        }
        $orderItemsAffcted = DB::table('orders_items')->insert($dataOrderItems);

        if ($order_id && $cartAffected && $orderItemsAffcted)
            DB::commit();
        else
            DB::rollBack();

        return redirect('/cashier/'.$no);
    }


    /**
     * Orders of current user.
     */
    public function mine(Request $request) {
        $items = Order::fetchMyOrders($request->user()->id);
        $goods = CartController::extractGoods($items);

        // attach status
        foreach ($goods as $k => $v) {
            $goods[$k]['info']['status'] = $items[$k]->status;
            $goods[$k]['info']['no'] = $items[$k]->no;
        }

        return view('front/myorders', [
            'goods' => $goods
        ]);
    }


    public function revokeorder($no) {
        Order::where('no', $no)->delete();
        return redirect('/myorders');
    }
}
