<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class GoodsAttrCat extends Model
{
    protected $table = 'goods_attr_cat';

//    protected $fillable = ['name', 'goods_attr_name_id'];

    public function store(String $name, Array $attr_ids) {


//        var_dump($attr_ids);
//        exit();
//        $this->name = $name;
//        $this->goods_attr_name_id = implode(',', $attr_ids);
//        return $this->save();


        $data = [];
        foreach ($attr_ids as $v) {
            $data[] = [
                'name' => $name,
                'goods_attr_name_id' => $v
            ];
        }

//        return $this->insert($data);
        return GoodsAttrCat::insert($data);

//        return $this->fill($data)->save();
    }
}
