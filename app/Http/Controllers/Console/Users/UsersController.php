<?php

namespace App\Http\Controllers\Console\Users;

use App\Http\Controllers\Console\ConsoleController;
use App\Http\Controllers\Front\FrontController;
use App\Models\Role;
use App\Models\RoleUser;
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
        $roles = Role::where('id', '<>', 1)->get();
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


    public function granted($id) {
        $row = User::find($id);
        $roles = $row->roles;
        $granted = $row->roles;

        $this->tabs = [
            [
                'url' => url('/user/granted/1'),
                'name' => '授权列表'
            ],
            [
                'url' => url('/user/grant/1'),
                'name' => '添加授权'
            ],
        ];
        return view('console/granted_list',[
            'tabs' => $this->tabs,
            'active' => 0,
            'granted' => $granted,
            'roles' => $roles,
            'user_id' => $id
        ]);
    }


    public function grant(Request $request, $id) {

        if ($request->isMethod('post')) {
            $user = User::find($id);
            $user->roles()->attach($request->role_id);

            return redirect('/user/granted/'.$id);
        }

        $this->tabs = [
            [
                'url' => url('/user/granted/1'),
                'name' => '授权列表'
            ],
            [
                'url' => url('/user/grant/1'),
                'name' => '添加授权'
            ],
        ];
        $roles = Role::get();
        $list = [];
        foreach ($roles as $role) {
            $list[] = [
                'id' => $role->id,
                'name' => $role->display_name
            ];
        }
        return view('console/grant', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => $list,
            'user_id' => $id
        ]);
    }

    public function revokegrant($user_id, $id) {
        RoleUser::where('user_id', $user_id)->where('role_id', $id)->delete();
        return redirect('/user/granted/'.$user_id);
    }
}
