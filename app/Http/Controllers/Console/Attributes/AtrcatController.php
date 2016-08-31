<?php

namespace App\Http\Controllers\Console\Attributes;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Atrcat;
use App\Models\AtrcatAttr;
use App\Models\Attr;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AtrcatController extends ConsoleController
{
    private $model;
    public function __construct(Atrcat $model){
        parent::__construct();
        $this->model = $model;
        $this->tabs = [
            [
                'url' => url('/atrcat'),
                'name' => '属性分类'
            ],
            [
                'url' => url('/atrcat/add'),
                'name' => '添加分类'
            ],
        ];
    }


    public function index(){
        $list = $this->model->fetchBlock();
        return display('console/atrcat_list', ['tabs' => $this->tabs, 'active' => 0, 'list' => json_encode($list)]);
    }


    public function add(Attr $attr) {
        $selects = $attr->attributes();

        foreach ($selects as $k => $v) {
            if ($v['suffix'])
                $selects[$k]['name'] = $v['name'].'('.$v['suffix'].')';
        }

        $select_name = 'attr_id';
        return display('console/atrcat_add', [
            'tabs' => $this->tabs,
            'active' => 1,
            'select_name' => $select_name,
            'selects' => json_encode($selects)
        ]);
    }

    public function postAdd(Request $request, AtrcatAttr $attrAtrcat) {
        $attr_ids = $request->attr_ids;
        $name = $request->name;

        DB::beginTransaction();
        $atrcat_id = $this->model->store($name);
        $affectedRows = $attrAtrcat->store($atrcat_id, $attr_ids);

        if ($atrcat_id && $affectedRows)
            DB::commit();
        else
            DB::rollBack();

        return redirect('/atrcat');
    }

    public function sublist($id) {
        $list = $this->model->fetchAttrs($id);
        return display('console/atrcat_sublist', [
            'tabs' => $this->tabs,
            'active' => 0,
            'list' => json_encode($list),
            'cid' => $id
        ]);
    }

    public function revoke($cid, $attr_id, AtrcatAttr $atrcatAttr) {

        $atrcatAttr->remove($cid, $attr_id);
        return redirect('/attr/sublist/'.$cid);
    }

    public function asAttr($cid, Attr $attr) {
        $selects = $attr->attributes();

        $this->tabs[1]['url'] = 'javascript:;';
        $this->tabs[1]['name'] = '关联属性';

        return display('console/atrcat_attr_add', [
            'tabs' => $this->tabs,
            'active' => 1,
            'select_name' => 'attr_id',
            'cid' => $cid,
            'selects' => json_encode($selects)
        ]);
    }

    public function postAsAttr(Request $request, AtrcatAttr $atrcatAttr) {
        $cid = $request->cid;
        $attr_ids = $request->attr_ids;
        $atrcatAttr->store($cid, $attr_ids);
        return redirect('/atrcat/sublist/'.$cid);
    }
}
