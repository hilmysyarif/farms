<?php

namespace App\Http\Controllers\Console\Attributes;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\GoodsAttrCat;
use App\Models\GoodsAttrName;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttributesCategoriesController extends ConsoleController
{

    private $model;
    public function __construct(GoodsAttrCat $model){
        parent::__construct();
        $this->model = $model;
        $this->tabs = [
            [
                'url' => url('/goods/attributes/categories'),
                'name' => '属性分类'
            ],
            [
                'url' => url('/goods/attributes/categories/add'),
                'name' => '添加分类'
            ],
        ];
    }


    public function index(){
        $list = $this->model->fetchBlock();
        return display('console/goods_attr_cates_list', ['tabs' => $this->tabs, 'active' => 0, 'list' => json_encode($list)]);
    }


    public function add(GoodsAttrName $attrName) {
        $selects = $attrName->attributes();
        $select_name = 'goods_attr_name_id';
        return display('console/goods_attr_cates_add', ['tabs' => $this->tabs, 'active' => 1, 'select_name' => $select_name, 'selects' => json_encode($selects)]);
    }

    public function postAdd(Request $request) {
        $attr_ids = $request->attr_ids;
        $this->model->store($request->name, $attr_ids);

        return redirect('/goods/attributes/categories');
    }

    public function list($name, GoodsAttrName $goodsAttrName) {
        echo 'cat_id11:'.$name.'<br>';
        $ids = $this->model->fetchAttrs($name);
        $attrs = $goodsAttrName->fetchByIds($ids);
        return display('console/goods_attr_cates_subattrs_list', ['tabs' => $this->tabs, 'active' => 0, 'list' => json_encode($attrs)]);
    }
}
