<?php

namespace App\Http\Controllers\Console\Settings;

/**
 * Generated by RTKit.
 */

use App\Http\Controllers\Console\ConsoleController;
use Illuminate\Http\Request;
use App\Http\Requests;

class PermissionController extends ConsoleController {

    public function __construct(){
        parent::__construct();
        $this->tabs = [
            [
                'url' => url('/permissions'),
                'name' => '权限管理'
            ],
            [
                'url' => url('/permissions/add'),
                'name' => '添加权限'
            ],
        ];
    }

    public function index() {



        return view('console.permissions_list', [
            'tabs' => $this->tabs,
            'list' => [],
            'active' => 0,
            'pages' => []
        ]);
    }

    public function add(Request $request) {

        if ($request->isMethod('post')) {
            return redirect();
        }
        return view();
    }

    public function edit(Request $request, $id) {
        if ($request->isMethod('post')) {
            return redirect();
        }
        return view();
    }

    public function remove($id) {
        return redirect(url());
    }
}
