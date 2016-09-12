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
            ->get()->toArray();
        foreach ($res as $k => $v) {
            $res[$k]['id'] = $v['attr_id'];
        }
        return $res;
    }
}
