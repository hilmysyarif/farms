<?php

namespace App\Http\Controllers\Console\Attributes;

use App\Http\Controllers\Console\ConsoleController;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttributesCategoriesController extends ConsoleController
{

    public function __construct(){
        parent::__construct();
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


    public function add() {
        return display('console/goods_attr_cates_add', ['tabs' => $this->tabs, 'active' => 1]);
    }
}
