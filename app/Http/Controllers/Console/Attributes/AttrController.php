<?php

namespace App\Http\Controllers\Console\Attributes;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Attr;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class AttrController extends ConsoleController
{
    private $model;
    private $types = [
        'number' => '数字',
        'text' => '文本',
        'color' => '颜色'
    ];
    public function __construct(Attr $model){
        parent::__construct();
        $this->model = $model;
        $this->tabs = [
            [
                'url' => url('/attr'),
                'name' => '属性列表'
            ],
            [
                'url' => url('/attr/add'),
                'name' => '添加属性'
            ],
        ];
    }


    public function index(){
        $list = $this->model->fetchBlock();
        return display('console/attr_list', ['tabs' => $this->tabs, 'active' => 0, 'list' => $list]);
    }


    public function add() {
        $selects = [
            ['id' => 'text', 'name' => '文本'],
            ['id' => 'number', 'name' => '数字'],
            ['id' => 'color', 'name' => '颜色']
        ];
        $select_name = 'type';
        return display('console/attr_add', [
            'tabs' => $this->tabs,
            'active' => 1,
            'select_name' => $select_name,
            'selects' => json_encode($selects)
        ]);
    }

    public function postAdd(Request $request) {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $errors = $validator->errors();
            return display('console/attr_add', ['tabs' => $this->tabs, 'active' => 1, 'errors' => $errors]);
        }

        $request->flash();
        $this->model->store($request->name, $request->suffix, $request->type);

        return redirect('/attr');
    }

    public function edit($id) {
        $row = $this->model->fetchOne($id);
        $selects = [
            ['id' => 'text', 'name' => '文本'],
            ['id' => 'number', 'name' => '数字'],
            ['id' => 'color', 'name' => '颜色']
        ];
        return display('console/attr_edit', [
            'tabs' => $this->tabs,
            'active' => 1,
            'row' => $row,
            'id' => $id,
            'select_notice' => $this->types[$row->type],
            'select_name' => 'type',
            'select_value' => $row->type,
            'selects' => json_encode($selects)
        ]);
    }

    public function postEdit(Request $request) {
        $id = $request->id;
        $name = $request->name;
        $suffix = $request->suffix;
        $type = $request->type;

        $data = [
            'name' => $name,
            'suffix' => $suffix,
            'type' => $type
        ];
        $this->model->updateOne($data, $id);
        return redirect('/attr');
    }

    public function delete($id) {
        $this->model->remove($id);
        return redirect('/attr');
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
