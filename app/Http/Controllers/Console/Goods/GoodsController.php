<?php

namespace App\Http\Controllers\Console\Goods;

use App\Http\Controllers\Console\ConsoleController;
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

    public function index() {
        return display('console/goods_list', ['tabs' => $this->tabs, 'active' => 0]);
    }

    public function add() {
        return display('console/goods_add', ['tabs' => $this->tabs, 'active' => 1]);
    }
}
