<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    /**
     * Add a new good.
     *
     * @param String $name
     * @param String $cover_url
     * @return bool
     */
    public function store(String $name, String $cover_url) {
        $this->name = $name;
        $this->cover_url = $cover_url;
        return $this->save();
    }

    /**
     * Update one specific goods.
     *
     * @param Int $goods_id
     * @param array $data
     * @return mixed
     */
    public function updateOne(Int $goods_id, Array $data) {
        return Goods::where('id', $goods_id)->update($data);
    }


    /**
     * Update cover url of specific good.
     *
     * @param Int $goods_id
     * @param String $cover_url
     * @return mixed
     */
    public function updateCover(Int $goods_id, String $cover_url) {
        return Goods::where('id', $goods_id)->update([
            'cover_url' => $cover_url
        ]);
    }

    /**
     * Remove one good.
     *
     * @param Int $id
     * @return int
     */
    public function remove(Int $id) {
        return Goods::destroy($id);
    }


    /**
     * @param $page
     * @return mixed
     */
    public function fetchBlock($page = 0) {
        return Goods::skip($page * 10)->take(10)->get()->toArray();
    }


    public function categories() {
        return $this->belongsToMany('App\Models\Category');
    }


    public function fetchOne($good_id) {
        return Goods::find($good_id)->toArray();
    }

    public function fetchOneWithAttr($good_id) {
        $row = Goods::find($good_id);
        $list = [];
        foreach ($row->attrs as $attr) {
            $list[] = [
                'attr_id' => $attr->id,
                'attr_name' => $attr->name,
                'attr_suffix' => $attr->suffix,
                'attr_type' => $attr->type
            ];
            var_dump($list);
        }

        // attrs should be attached into attrgoods via attr_id.

//        $attrGoods = $row->attrgoods;
//        foreach ($row->attrgoods as $k => $attrgoods) {
//            if ($attrgoods->attr_id == $list[$k]['attr_id'])
//        }
    }

    public function attrs() {
        return $this->belongsToMany('App\Models\Attr');
    }

    public function attrgoods() {
        return $this->hasMany('App\Models\AttrGoods');
    }
}
