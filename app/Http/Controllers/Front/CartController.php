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


    /**
     * Extract goods info from atrgids and number.
     *
     * @param $items
     * @param bool $forOrder
     * @return array
     */
    public static function extractGoods($items, $forOrder = false) {
        $goods = [];
        $info = [];
        $tmp = [];
        foreach ($items as $k => $v) {
            $number = $v->number;
            $atrgs = explode(',', $v->atrgids);
            foreach ($atrgs as $v1) {
                $atrInfo = AttrGoods::fetchOne($v1);
                $info[] = $atrInfo;
                if (!in_array($atrInfo['goods_id'], $tmp)) {
                    $tmp[] = $atrInfo['goods_id'];
                    $tmp1 = [
                        'info' => [
                            'goods_id' => $atrInfo['goods_id'],
                            'name' => $atrInfo['good_name'],
                            'cover' => $atrInfo['good_cover'],
                            'default_price' => $atrInfo['default_price'],
                            'total_price' => $atrInfo['default_price'],
                            'number' => $number
                        ]
                    ];
                    if (!$forOrder)
                        $tmp1['info']['row_id'] = $v->id;
                    $goods[] = $tmp1;
                }
            }
            


            // compute additional price.
//            $tmpPrice = 0;
//            $tmpAttrs = [];
            foreach ($goods as $key => $value) {
                $tmpPrice = 0;
                $tmpAttrs = [];
                foreach ($info as $k1 => $v1) {
                    if ($value['info']['goods_id'] == $v1['goods_id']) {
                        $tmpPrice += $v1['price'];
                        $tmpAttrs[] = $v1;
                    }
                }
                $goods[$key]['info']['total_price'] += $tmpPrice;
                $goods[$key]['info']['single_total_price'] = $goods[$key]['info']['total_price'];
                $goods[$key]['attrs'] = $tmpAttrs;
                $goods[$key]['info']['total_price'] = $goods[$key]['info']['total_price'] * $number;
            }
        }
        return $goods;
    }
}
