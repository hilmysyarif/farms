<?php

namespace App\Http\Controllers\Console\Goods;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Atrcat;
use App\Models\Attr;
use App\Models\Category;
use App\Models\CatsGoods;
use App\Models\Goods;
use App\Models\AttrGoods;
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

    public function index(Goods $goods) {
        $list = $goods->fetchBlock();
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

    public function postAdd(Request $request, Goods $goods) {
        $goods->store($request->name, $request->cover_url);
        return redirect('/goods');
    }

    public function edit($goods_id, Category $category, Goods $good) {
        // get information of current goods.
        $row = $good->fetchOne($goods_id);

        $categories = $category->fetchBlock();
        return display('console/goods_edit', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => json_encode($categories),
            'select_name' => 'category_id',
            'row' => $row,
            'goods_id' => $goods_id
        ]);
    }

    public function postEdit(Request $request, Goods $good) {
        $good_id = $request->goods_id;
        $data = [
            'name' => $request->name,
            'cover_url' => $request->cover_url,
            'sort' => $request->sort
        ];

        $good->updateOne($good_id, $data);
        return redirect('/goods');
    }

    public function associateCategories($goods_id, Category $category) {

        // row info
        $goods = Goods::find($goods_id);
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
            'goods_id' => $goods_id,
            'choosedCats' => $choosedCats,
            'row' => $goods
        ]);
    }

    public function associateAttributes($goods_id, Atrcat $atrcat, Attr $attr, AttrGoods $goodsAttr, Goods $good) {
        // get atrcats
        $atrcats = $atrcat->fetchAll();
        $jsonAtrcats = json_encode($atrcats);

        // get attrs
        $attrs = $attr->fetchAll();
        $jsonAttrs = json_encode($attrs);

        // get associated attrs
        $associatedAttrs = $goodsAttr->fetchAll($goods_id);
        if (count($associatedAttrs) == 0) {
            $this->tabs[1]['url'] = 'javascript:;';
            $this->tabs[1]['name'] = '关联属性';
            return display('console/goods_attributes', [
                'tabs' => $this->tabs,
                'active' => 1,
                'atrcats' => $jsonAtrcats,
                'attrs' => $jsonAttrs,
                'goods_id' => $goods_id,
                'associatedAttrs' => json_encode($associatedAttrs)
            ]);
        } else {
            $good->fetchOneWithAttr($goods_id);
        }
        var_dump($associatedAttrs);
        exit();
    }

    public function associateGalleries() {
        $this->tabs[1]['url'] = 'javascript:;';
        $this->tabs[1]['name'] = '关联相册';
        return display('console/goods_galleries', ['tabs' => $this->tabs, 'active' => 1]);
    }

    public function asCat(Request $request, CatsGoods $catsGoods) {
        $catsGoods->store($request->goods_id, $request->category_id);
        return redirect('/goods');
    }

    public function asAttr(Request $request, AttrGoods $goodsAttr) {
        $goods_id = $request->goods_id;
        $attrids = $request->attrids;

        $data = [];
        foreach ($attrids as $v) {
            $currentAttrInput = 'attr_id_'.$v;
            $data[] = [
                'goods_id' => $goods_id,
                'attr_id' => $v,
                'value' => $request->$currentAttrInput,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }

        $goodsAttr->storeBatch($data);

        return redirect('/goods');
    }

    public function asGall() {

    }
}
