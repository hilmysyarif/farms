<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function store($data) {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
        return $this->save();
    }

    public function fetchOne($id) {
        return Slider::find($id)->toArray();
    }

    public static function fetchAll() {
        return Slider::get();
    }

    public function updateOne($id, $data) {
        return Slider::where('id', $id)->update($data);
    }

    public function remove($id) {
        return Slider::destroy($id);
    }
}
