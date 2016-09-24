<?php

namespace App\Http\Controllers\Console\Categories;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class CategoriesController extends ConsoleController
{

    private $model;
    public function __construct(Category $model){
        parent::__construct();
        $this->model = $model;
        $this->tabs = [
            [
                'url' => '/categories',
                'name' => '分类列表'
            ],
            [
                'url' => '/categories/add',
                'name' => '添加分类'
            ],
        ];
    }

    public function index() {
        $categories = $this->model->fetchBlock();

        return display('console/categories_list', [
            'tabs' => $this->tabs,
            'active' => 0,
            'categories' => $categories
        ]);
    }

    public function subCatesList($pid) {
        $categories = $this->model->fetchByParent($pid);

        return display('console/categories_list', [
            'tabs' => $this->tabs,
            'active' => 0,
            'categories' => $categories,
            'id' => $pid
        ]);
    }

    public function subCategories($pid) {
        $categories = $this->model->fetchByParent($pid);

        return response()->json([
            'categories' => $categories
        ]);
    }

    public function add() {
        $categories = $this->model->fetchBlock();

        return display('console/categories_add', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => json_encode($categories)
        ]);
    }

    public function postAdd(Request $request) {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $errors = $validator->errors();

            $categories = $this->model->fetchBlock();
            return display('console/categories_add', [
                'tabs' => $this->tabs,
                'active' => 1,
                'selects' => $categories,
                'select_name' => 'parent_id',
                'errors' => $errors]);
        }

        $request->flash();
        $this->model->store($request->name, $request->parent_id, $request->sort_order);

        return redirect('/categories');
    }

    public function edit($id) {
        $row = $this->model->fetchOne($id);

        if ($row->parent_id == 0) {
            $row->option_id = 0;
            $row->option_name = '无';    
        } else {
            $parentRow = $this->model->fetchOne($row->parent_id);
            $row->option_id = $parentRow->id;
            $row->option_name = $parentRow->name;
        }

        $categories = $this->model->fetchBlock();
        return display(
            'console/categories_edit', [
            'tabs' => $this->tabs,
            'active' => 1,
            'row' => $row,
            'selects' => $categories,
            'select_name' => 'parent_id'
        ]);
    }

    public function postEdit(Request $request) {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $errors = $validator->errors();

            $categories = $this->model->fetchBlock();
            $row = $this->model->fetchOne($request->id);
            $row->option_id = $row->parent_id;
            $row->option_name = '测试';
            return display('console/categories_edit', [
                'tabs' => $this->tabs,
                'active' => 1,
                'row' => $row,
                'selects' => $categories,
                'select_name' => 'parent_id',
                'errors' => $errors]);
        }

        $request->flash();
        $this->model->updateOne([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'sort_order' => $request->sort_order
        ], $request->id);
        return redirect('/categories');
    }


    public function delete($id) {
        $this->model->remove($id);
        return redirect('/categories');
    }

    protected function validator(array $data) {
        $message = [
            'name.required' => '分类名不能为空',
            'sort_order.numeric' => '排序应当是数字'
        ];

        return Validator::make($data, [
            'name' => 'required',
            'sort_order' => 'numeric'
        ], $message);
    }
}
