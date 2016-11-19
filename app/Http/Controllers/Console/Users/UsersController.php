<?php

namespace App\Http\Controllers\Console\Users;

use App\Http\Controllers\Console\ConsoleController;
use App\Http\Controllers\Front\FrontController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends ConsoleController
{
    public function __construct(){
        parent::__construct();
        $this->tabs = [
            [
                'url' => url('/users'),
                'name' => '用户列表'
            ],
            [
                'url' => url('/admins'),
                'name' => '管理员'
            ],
        ];
    }

    public function index($currentPage = 1) {
        $list = User::fetchBlock();
        $pagesCount = ceil(User::count() / 10);
        $pages = FrontController::pages('/users', $pagesCount, $currentPage);

        return display('console/users_list',
            [
                'tabs' => $this->tabs,
                'active' => 0,
                'list' => $list,
                'pages' => $pages
            ]);
    }

    public function adminList() {
        return display('console/users_list', ['tabs' => $this->tabs, 'active' => 1]);
    }

    public function edit(Request $request, $id) {
        $row = User::find($id);
        // all roes.
        $roles = Role::get();
        $newRoles = [];
        foreach ($roles as $v) {
            $newRoles[] = [
                'id' => $v->id,
                'name' => $v->display_name
            ];
        }
        return view('console/users_edit',[
            'tabs' => $this->tabs,
            'active' => 0,
            'selects' => $newRoles,
            'row' => $row
        ]);
    }
}
