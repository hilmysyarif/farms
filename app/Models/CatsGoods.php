<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatsGoods extends Model
{
    protected $table = 'category_goods';
    public $timestamps = false;

    public function store(Int $goods_id, Int $category_id) {
        $this->goods_id = $goods_id;
        $this->category_id = $category_id;
        return $this->save();
    }

    public function goodsIds(Int $category_id) {
        return $this->where('category_id', $category_id)->pluck('goods_id')->toArray();
    }
}
