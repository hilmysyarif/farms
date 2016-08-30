<?php

namespace App\Http\Controllers\Console\Goods;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Category;
use App\Models\Good;
use App\Models\GoodsCats;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends ConsoleController
{
    public function __construct(){
        parent::__construct();
        $this->tabs = [
            [
                'url' => url('/goods'),
                'name' => '商品列表'
            ],
            [
                'url' => url('/goods/add'),
                'name' => '添加商品'
            ],
        ];
    }

    public function index(Good $goods) {
        $list = $goods->fetchBlock();
//        var_dump($list);
//        exit();
        return display('console/goods_list', [
            'tabs' => $this->tabs,
            'active' => 0,
            'list' => json_encode($list)
        ]);
    }

    public function add(Category $category) {
        $categories = $category->fetchBlock();
        return display('console/goods_add', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => json_encode($categories),
            'select_name' => 'category_id'
        ]);
    }

    public function postAdd(Request $request, Good $goods) {
        $goods->store($request->name, $request->cover_url);
        return redirect('/goods');
    }

    public function associateCategories($goods_id, Category $category) {
        // row info
        $goods = \App\Models\Good::find($goods_id);
        $choosedCats = [];
        foreach($goods->categories as $cat) {
            $choosedCats[] = $cat->name;
        }

        $categories = $category->fetchBlock();

        $this->tabs[1]['url'] = 'javascript:;';
        $this->tabs[1]['name'] = '关联分类';
        return display('console/goods_categories', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => json_encode($categories),
            'select_name' => 'category_id',
            'goods_id' => $goods_id,
            'choosedCats' => $choosedCats,
            'row' => $goods
        ]);
    }

    public function associateAttributes() {
        $this->tabs[1]['url'] = 'javascript:;';
        $this->tabs[1]['name'] = '关联属性';
        return display('console/goods_attributes', ['tabs' => $this->tabs, 'active' => 1]);
    }

    public function associateGalleries() {
        $this->tabs[1]['url'] = 'javascript:;';
        $this->tabs[1]['name'] = '关联相册';
        return display('console/goods_galleries', ['tabs' => $this->tabs, 'active' => 1]);
    }

    public function asCat(Request $request, GoodsCats $goodsCats) {
        $goodsCats->store($request->goods_id, $request->category_id);
        return redirect('/goods');
    }

    public function asAttr() {

    }

    public function asGall() {

    }
}
