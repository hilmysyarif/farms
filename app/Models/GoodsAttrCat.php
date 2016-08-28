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
        $sql = 'SELECT c.id as cid, c.goods_attr_name_id as id, n.name FROM shiyi.sy_goods_attr_cat AS c'.
            ' LEFT JOIN shiyi.sy_goods_attr_name as n '.
            ' ON c.goods_attr_name_id = n.id WHERE c.name = "'.$name.'"';
        $list = DB::select($sql);
        return $list;
    }

    public function remove($cid) {
        return GoodsAttrCat::destroy($cid);
    }

    public function row($cid) {
        return GoodsAttrCat::where('id', $cid)->first();
    }
}
