<?php

namespace App\Http\Controllers\Console\Settings;

use App\Http\Controllers\Console\ConsoleController;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SlidersController extends ConsoleController
{
    public function __construct(){
        parent::__construct();
        $this->tabs = [
            [
                'url' => url('/sliders'),
                'name' => '幻灯列表'
            ],
            [
                'url' => url('/sliders/add'),
                'name' => '添加幻灯'
            ],
        ];
    }

    public function index() {
        return display('console/sliders_list', ['tabs' => $this->tabs, 'active' => 0]);
    }

    public function add() {
        return display('console/sliders_add', ['tabs' => $this->tabs, 'active' => 1]);
    }
}
