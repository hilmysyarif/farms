<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttrGoods extends Model
{
    protected $table = 'attr_goods';


    public function storeBatch(Array $data) {
        return $this->insert($data);
    }

    public function fetchAll($goods_id) {
//        $res = AttrGoods::where('goods_id', $goods_id)
//            ->select('goods_id', 'attr_id', 'value')
//            ->get()->toArray();
//        foreach ($res as $k => $v) {
//            $res[$k]['id'] = $v['attr_id'];
//        }

        $res = AttrGoods::where('goods_id', $goods_id)
            ->select('goods_id', 'attr_id', 'value')
            ->get();
        foreach ($res as $k => $rs) {
            $attr = $rs->attr;
            $res[$k]->name = $attr->name;
            $res[$k]->type = $attr->type;
            $res[$k]->suffix = $attr->suffix;
            unset($res[$k]->attr);
        }

        return $res;
    }

    public function attr() {
        return $this->belongsTo('App\Models\Attr');
    }
}
