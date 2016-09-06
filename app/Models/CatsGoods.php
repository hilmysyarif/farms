<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatsGoods extends Model
{
    protected $table = 'category_good';
    public $timestamps = false;

    public function store(Int $good_id, Int $category_id) {
        $this->good_id = $good_id;
        $this->category_id = $category_id;
        return $this->save();
    }
}
