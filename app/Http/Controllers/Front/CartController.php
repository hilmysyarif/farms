<?php

namespace App\Http\Controllers\Front;

use App\Models\AttrGoods;
use App\Models\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends FrontController {

    public function index(Cart $cart, Request $request, AttrGoods $attrGoods) {
        $items = $cart->items($request, $attrGoods);
        $goods = $this->extractGoods($items, $attrGoods);
        dump($goods);
        return view('front/cart');
    }

    public function postAdd(Request $request, Cart $cart) {
        $cart->store($request);
        return redirect('/cart');
    }

    private function extractGoods($items, $attrGoods) {
        $goods = [];
        foreach ($items as $k => $v) {
            $number = $v['number'];
            $atrgs = explode(',', $v['atrgids']);
            $info = [];
            foreach ($atrgs as $v) {
                $info[] = $attrGoods->fetchOne($v);
            }

            // compute additional price.
            $tmpPrice = 0;
            foreach ($info as $v) {
                $tmpPrice += $v['price'];
            }

            if (empty($goods['info'])) {
                $goods['info'] = [
                    'name' => $info[0]['good_name'],
                    'cover' => $info[0]['good_cover'],
                    'default_price' => $info[0]['default_price'],
                    'total_price' => $info[0]['default_price'] + $tmpPrice,
                    'number' => $number
                ];
            }
            $goods['attrs'] = $info;
        }
        return $goods;
    }
}
