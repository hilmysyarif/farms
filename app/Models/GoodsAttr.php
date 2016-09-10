<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsAttr extends Model
{
    protected $table = 'goods_attr';


    public function storeBatch(Array $data) {
        return $this->insert($data);
    }

    public function fetchAll($goods_id) {
        return GoodsAttr::where('goods_id', $goods_id)
            ->select('goods_id', 'attr_id', 'value')
            ->get()->toArray();
    }

}
