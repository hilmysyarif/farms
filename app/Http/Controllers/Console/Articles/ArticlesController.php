<?php

namespace App\Http\Controllers\Console\Articles;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Article;
use App\Models\Category;
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

    public function index(Article $article) {
        $list = $article->fetchBlock();

        return display('console/articles_list', [
            'tabs' => $this->tabs,
            'active' => 0,
            'list' => $list
        ]);
    }

    public function add(Category $category) {

        $categories = $category->fetchBlock();
        $options = [
            [
                'id' => 0,
                'name' => '草稿'
            ],
            [
                'id' => 1,
                'name' => '发布'
            ]
        ];

        return display('console/articles_add', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => json_encode($categories),
            'options' => json_encode($options)
        ]);
    }

    public function postAdd(Request $request, Article $article) {
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'content' => $request->body,
            'icon' => $request->icon
        ];
        $article->store($data);

        return redirect(url('/articles'));
    }

    public function edit($id, Category $category) {
        $row = Article::fetchOne($id);
        $this->tabs = [
            [
                'url' => url('/articles'),
                'name' => '文章列表'
            ],
            [
                'url' => url('/articles/edit/'.$id),
                'name' => '编辑文章'
            ],
        ];
        $categories = $category->fetchBlock();
        $options = [
            [
                'id' => 0,
                'name' => '草稿'
            ],
            [
                'id' => 1,
                'name' => '发布'
            ]
        ];

        return display('console/articles_edit', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => json_encode($categories),
            'options' => json_encode($options),
            'row' => $row,
            'id' => $id
        ]);
    }

    public function postEdit(Request $request, Article $article) {
        $id = $request->id;
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'content' => $request->body,
            'icon' => $request->icon
        ];

        $article->updateOne($id, $data);

        return redirect(url('/articles'));
    }

    public function delete($id, Article $article) {
        $article->remove($id);
        return redirect(url('articles'));
    }
}
