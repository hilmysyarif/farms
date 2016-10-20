<?php

namespace App\Http\Controllers\Console\Settings;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Slider;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SlidersController extends ConsoleController
{
    public function __construct(){
        parent::__construct();
        $this->tabs = [
            [
                'url' => url('/sliders'),
                'name' => '幻灯列表'
            ],
            [
                'url' => url('/sliders/add'),
                'name' => '添加幻灯'
            ],
        ];
    }

    public function index(Slider $slider) {
        $list = $slider->fetchAll();
        return display('console/sliders_list', [
            'tabs' => $this->tabs,
            'active' => 0,
            'list' => $list
        ]);
    }

    public function add() {
        return display('console/sliders_add', ['tabs' => $this->tabs, 'active' => 1]);
    }

    public function postAdd(Request $request, Slider $slider) {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'img' => $request->img,
            'sort_order' => $request->sort_order
        ];
        $slider->store($data);
        return redirect(url('/sliders'));
    }

    public function edit($id, Slider $slider) {
        $row = $slider->fetchOne($id);
        return display('console/sliders_edit', ['tabs' => $this->tabs, 'active' => 1, 'row' => $row]);
    }

    public function postEdit(Request $request, Slider $slider) {
        $id = $request->id;
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'img' => $request->img,
            'sort_order' => $request->sort_order
        ];
        $slider->updateOne($id, $data);
        return redirect(url('/sliders'));
    }

    public function delete($id, Slider $slider) {
        $slider->remove($id);
        return redirect(url('/sliders'));
    }
}
