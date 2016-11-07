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

//    public function fetchOne($id) {
//        $row = $this->find($id);
//        $res = [
//            'name' => $row->attr->name,
//            'type' => $row->attr->type,
//            'suffix' => $row->attr->suffix,
//            'value' => $row->value,
//            'price' => $row->price,
//            'sale' => $row->sale,
//            'package' => $row->package,
//            'goods_id' => $row->goods_id,
//            'good_name' => $row->goods->name,
//            'good_cover' => $row->goods->cover_url,
//            'default_price' => $row->goods->default_price
//        ];
//        return $res;
//    }
    public static function fetchOne($id) {
        $row = AttrGoods::find($id);
        $res = [
            'name' => $row->attr->name,
            'type' => $row->attr->type,
            'suffix' => $row->attr->suffix,
            'value' => $row->value,
            'price' => $row->price,
            'sale' => $row->sale,
            'package' => $row->package,
            'goods_id' => $row->goods_id,
            'good_name' => $row->goods->name,
            'good_cover' => $row->goods->cover_url,
            'default_price' => $row->goods->default_price
        ];
        return $res;
    }

    public function goods() {
        return $this->belongsTo('App\Models\Goods');
    }
    
    public function attr() {
        return $this->belongsTo('App\Models\Attr');
    }

    public function updateOne($id, Array $data) {
        return AttrGoods::where('id', $id)->update($data);
    }

    public function remove($id) {
        return AttrGoods::destroy($id);
    }
}
