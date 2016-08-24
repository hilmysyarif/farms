<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class GoodsAttrName extends Model
{
    protected $table = 'goods_attr_name';

    public function store(String $name) {
        $this->name = $name;
        return $this->save();
    }

    public function fetchBlock(Int $page = 0) {
        return GoodsAttrName::orderBy('created_at', 'desc')->skip($page * 10)->take(10)->get();
    }

    public function fetchOne(Int $id) {
        return GoodsAttrName::find($id);
    }

    public function remove(Int $id) {
        return GoodsAttrName::destroy($id);
    }

    public function updateOne(String $name, Int $id) {
        return GoodsAttrName::where('id', $id)->update([
            'name' => $name
        ]);
    }

    public function attributes() {
        return GoodsAttrName::all()->toArray();
    }
}
