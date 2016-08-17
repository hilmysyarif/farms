<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsAttr extends Model
{
    protected $table = 'goods_attr';

    public function store(Array $data) {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
        return $this->save();
    }
}
