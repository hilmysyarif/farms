<?php

namespace App\Http\Controllers\Front;

use App\Models\CatsGoods;
use App\Models\Goods;
use Illuminate\Http\Request;
use App\Http\Requests;

class ListController extends FrontController {

    public function index($categoryId, CatsGoods $catsGoods, Goods $goods) {
        $ids = $catsGoods->goodsIds($categoryId);
        $goodsList = $goods->fetchByIds($ids, 0, 10);

        return view('front/list', [
            'navHtml' => $this->navHtml,
            'goodsList' => $goodsList
        ]);
    }
}
