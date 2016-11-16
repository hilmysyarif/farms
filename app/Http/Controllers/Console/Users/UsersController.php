<?php

namespace App\Http\Controllers\Console\Users;

use App\Http\Controllers\Console\ConsoleController;
use App\Http\Controllers\Front\FrontController;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}
