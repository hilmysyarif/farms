<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsAttrCat extends Model
{
    protected $table = 'goods_attr_cat';

    public function store(String $name, Int $goods_attr_name_id) {
        $this->name = $name;
        $this->goods_attr_name_id = $goods_attr_name_id;
        return $this->save();
    }
}
