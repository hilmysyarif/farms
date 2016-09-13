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

    public function fetchOne($id) {
        $row = $this->find($id);
        $res = [
            'name' => $row->attr->name,
            'type' => $row->attr->type,
            'suffix' => $row->attr->suffix,
            'value' => $row->value
        ];
        return $res;
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
