<?php

namespace App\Http\Controllers\Console\Orders;

use App\Http\Controllers\Console\ConsoleController;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends ConsoleController
{
    public function __construct(){
        parent::__construct();
        $this->tabs = [
            [
                'url' => url('/orders'),
                'name' => '订单列表'
            ]
        ];
    }

    public function index() {
        return display('console/orders_list', ['tabs' => $this->tabs, 'active' => 0]);
    }
}
