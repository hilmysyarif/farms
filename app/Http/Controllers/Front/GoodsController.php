<?php

namespace App\Http\Controllers\Front;

use App\Models\Goods;
use Illuminate\Http\Request;
use App\Http\Requests;

class GoodsController extends FrontController{
    
    public function index($id, Goods $goods) {
        $row = $goods->detail($id);
        $this->breadcrumbs[] = [
            'url' => url('/list/'.$row->categoryGoods->category->id),
            'name' => $row->categoryGoods->category->name
        ];
        $this->breadcrumbs[] = [
            'url' => url('/detail/'.$id),
            'name' => $row->name
        ];

        $itemsList = unserialize($row->package);
        !$itemsList && $itemsList = [];

        return view('front/detail', [
            'row' => $row,
            'itemsList' => $itemsList,
            'id' => $id,
            'breadcrumbs' => $this->breadcrumbs
        ]);
    }
}
