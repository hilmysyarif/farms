<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsCats extends Model
{
    protected $table = 'goods_with_categories';
    public $timestamps = false;

    public function store(Int $goods_id, Int $category_id) {
        $this->goods_id = $goods_id;
        $this->category_id = $category_id;
        return $this->save();
    }
}
