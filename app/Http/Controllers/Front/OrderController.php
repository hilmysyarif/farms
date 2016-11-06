<?php

namespace App\Http\Controllers\Front;

use App\Models\Address;
use App\Models\AttrGoods;
use App\Models\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends FrontController {

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
        $fullAddresses = $this->fullAddress($address->zone_id, $pcd);
        $fullAddresses = array_reverse($fullAddresses);
        $address->pcd = implode(' ', $fullAddresses);

        // prepare goods info.
        $items = $cart->items($request);
        $goods = CartController::extractGoods($items, $attrGoods);

        return view('front/order', [
            'navHtml' => $this->navHtml,
            'address' => $address,
            'goods' => $goods
        ]);
    }


    private function fullAddress($id, $pcd, $res = []) {
        $res[] = $pcd[$id]['name'];
        if ($pcd[$id]['pid'] != 0) {
            return $this->fullAddress($pcd[$id]['pid'], $pcd, $res);
        }
        return $res;
    }
}
