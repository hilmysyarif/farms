<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\CatsGoods;
use App\Models\Goods;
use Illuminate\Http\Request;
use App\Http\Requests;

class ListController extends FrontController {

    public function index($categoryId, $currentPage = 1) {
        $category = Category::find($categoryId);
        $this->breadcrumbs[] = [
            'url' => url('/list/'.$categoryId),
            'name' => $category->name
        ];

        $ids = CatsGoods::goodsIds($categoryId);
        $goodsList = Goods::fetchByIds($ids, 0, 10);
        
        $pages = parent::pages('/list/'.$categoryId, count($ids), $currentPage);

        return view('front/list', [
            'goodsList' => $goodsList,
            'pages' => $pages,
            'breadcrumbs' => $this->breadcrumbs
        ]);
    }
}
