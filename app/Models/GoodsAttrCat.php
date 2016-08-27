<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class GoodsAttrCat extends Model
{
    protected $table = 'goods_attr_cat';

    public function store(String $name, Array $attr_ids) {


        $data = [];
        foreach ($attr_ids as $v) {
            $data[] = [
                'name' => $name,
                'goods_attr_name_id' => $v,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }
        return GoodsAttrCat::insert($data);
    }

    public function fetchBlock(Int $page = 0) {
        $list = $this->select('name')->distinct()->skip($page * 10)->take(10)->get()->toArray();
        return $list;
    }

    public function fetchAttrs($name) {
        $cat_ids = GoodsAttrCat::where('name', $name)->pluck('goods_attr_name_id')->toArray();
        return $cat_ids;
    }
}
