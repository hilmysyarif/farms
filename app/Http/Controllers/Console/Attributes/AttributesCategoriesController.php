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
        return display('console/goods_attr_cates_list', ['tabs' => $this->tabs, 'active' => 0]);
    }


    public function add(GoodsAttrName $attrName) {
        $selects = $attrName->attributes();
        $select_name = 'goods_attr_name_id';
        return display('console/goods_attr_cates_add', ['tabs' => $this->tabs, 'active' => 1, 'select_name' => $select_name, 'selects' => json_encode($selects)]);
    }

    public function postAdd(Request $request) {

    }
}