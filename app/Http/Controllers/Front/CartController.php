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

    // TODO: here is not ready. You should organize data by goods.
    private function extractGoods($items, $attrGoods) {
        $goods = [];
        $info = [];
        $tmp = [];
        foreach ($items as $k => $v) {
            $number = $v['number'];
            $atrgs = explode(',', $v['atrgids']);

            foreach ($atrgs as $v) {
                $atrInfo = $attrGoods->fetchOne($v);
                $info[] = $atrInfo;
                if (!in_array($atrInfo['goods_id'], $tmp)) {
                    $tmp[] = $atrInfo['goods_id'];
                    $goods[] = [
                        'info' => [
                            'goods_id' => $atrInfo['goods_id'],
                            'name' => $atrInfo['good_name'],
                            'cover' => $atrInfo['good_cover'],
                            'default_price' => $atrInfo['default_price'],
                            'total_price' => $atrInfo['default_price'],
                            'number' => $number
                        ]
                    ];
                }


            }
            


            // compute additional price.
            $tmpPrice = 0;
            $tmpAttrs = [];
            foreach ($goods as $k => $v) {
                $tmpPrice = 0;
                $tmpAttrs = [];
                foreach ($info as $k1 => $v1) {
                    if ($v['info']['goods_id'] == $v1['goods_id']) {
                        $tmpPrice += $v1['price'];
                        $tmpAttrs[] = $v1;
                    }
                }
                $goods[$k]['info']['total_price'] += $tmpPrice;
                $goods[$k]['attrs'] = $tmpAttrs;
            }
        }
        return $goods;
    }
}
