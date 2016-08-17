<?php

namespace App\Http\Controllers\Console\Articles;

use App\Http\Controllers\Console\ConsoleController;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends ConsoleController
{
    public function __construct(){
        parent::__construct();
        $this->tabs = [
            [
                'url' => url('/articles'),
                'name' => '文章列表'
            ],
            [
                'url' => url('/articles/add'),
                'name' => '添加文章'
            ],
        ];
    }

    public function index() {
        return display('console/articles_list', ['tabs' => $this->tabs, 'active' => 0]);
    }

    public function add() {
        return display('console/articles_add', ['tabs' => $this->tabs, 'active' => 0]);
    }
}
