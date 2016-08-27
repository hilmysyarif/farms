<?php

namespace App\Http\Controllers\Console\Attributes;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\GoodsAttrCat;
use App\Models\GoodsAttrName;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class AttributesNamesController extends ConsoleController
{
    private $model;
    public function __construct(GoodsAttrName $model){
        parent::__construct();
        $this->model = $model;
        $this->tabs = [
            [
                'url' => url('/goods/attributes'),
                'name' => '属性列表'
            ],
            [
                'url' => url('/goods/attributes/add'),
                'name' => '添加属性'
            ],
        ];
    }


    public function index(){
        $list = $this->model->fetchBlock();
        return display('console/goods_attributes_list', ['tabs' => $this->tabs, 'active' => 0, 'list' => $list]);
    }
    

    public function add() {
        return display('console/goods_attributes_add', ['tabs' => $this->tabs, 'active' => 1]);
    }

    public function postAdd(Request $request) {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $errors = $validator->errors();
            return display('console/goods_attributes_add', ['tabs' => $this->tabs, 'active' => 1, 'errors' => $errors]);
        }

        $request->flash();
        $this->model->store($request->name);

        return redirect('/goods/attributes');
    }

    public function edit($id) {
        $row = $this->model->fetchOne($id);
        return display('console/goods_attributes_edit', ['tabs' => $this->tabs, 'active' => 1, 'name' => $row->name, 'id' => $id]);
    }

    public function postEdit(Request $request) {
        $id = $request->id;
        $name = $request->name;
        $this->model->updateOne($name, $id);
        return redirect('/goods/attributes');
    }

    public function delete($id) {
        $this->model->remove($id);
        return redirect('/goods/attributes');
    }

    protected function validator(array $data) {
        $message = [
            'name.required' => '属性名不能为空',
        ];

        return Validator::make($data, [
            'name' => 'required'
        ], $message);
    }
}
