<?php

namespace App\Http\Controllers\Front;

use App\Models\AttrGoods;
use App\Models\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends FrontController {

    public function index(Cart $cart, Request $request, AttrGoods $attrGoods) {
        $this->breadcrumbs[] = [
            'url' => url('/cart'),
            'name' => trans('common.cart')
        ];

        $items = $cart->items($request);
        $goods = self::extractGoods($items, $attrGoods);
        return view('front/cart', [
            'goods' => $goods,
            'breadcrumbs' => $this->breadcrumbs
        ]);
    }

    public function postAdd(Request $request, Cart $cart) {
        $cart->store($request);
        return redirect('/cart');
    }

    public static function extractGoods($items) {
        $goods = [];
        $info = [];
        $tmp = [];
        foreach ($items as $k => $v) {
            $number = $v['number'];
            $atrgs = explode(',', $v['atrgids']);
            $id = $v->id;
            foreach ($atrgs as $v) {
                $atrInfo = AttrGoods::fetchOne($v);
                $info[] = $atrInfo;
                if (!in_array($atrInfo['goods_id'], $tmp)) {
                    $tmp[] = $atrInfo['goods_id'];
                    $goods[] = [
                        'info' => [
                            'row_id' => $id,
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
                $goods[$k]['info']['single_total_price'] = $goods[$k]['info']['total_price'];
                $goods[$k]['attrs'] = $tmpAttrs;
                $goods[$k]['info']['total_price'] = $goods[$k]['info']['total_price'] * $number;
            }
        }
        return $goods;
    }
}
