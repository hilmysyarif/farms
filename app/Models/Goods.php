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
     * @param array $ids
     * @param int $page
     * @param int $size
     * @return mixed
     */
    public function fetchByIds(Array $ids, $page = 0, $size = 10) {
        return $this->whereIn('id', $ids)->skip($page * $size)->take($size)->get()->toArray();
    }

    /**
     * @param $page
     * @return mixed
     */
    public function fetchBlock($page = 0) {
        return Goods::skip($page * 10)->take(10)->get()->toArray();
    }

    public function galleriesList($goods_id) {
        $row = Goods::find($goods_id);
        return $row->galleries;
    }


    public function fetchOne($good_id) {
        return Goods::find($good_id)->toArray();
    }

    public function fetchOneWithAttr($good_id) {
        $row = Goods::find($good_id);
        $attrList = [];
        foreach ($row->attrs as $attr) {
            $attrList[] = [
                'attr_id' => $attr->id,
                'attr_name' => $attr->name,
                'attr_suffix' => $attr->suffix,
                'attr_type' => $attr->type
            ];
        }

        // attrs should be attached into attrgoods via attr_id.
        $attrGoodsList = [];
        foreach ($row->attrgoods as $attrgoods) {

            $currentRow = [];
            foreach ($attrList as $alist) {
                if ($alist['attr_id'] == $attrgoods->attr_id) {
                    $currentRow = $alist;
                }
            }

            $attrGoodsList[] = [
                'id' => $attrgoods->id,
                'goods_id' => $attrgoods->id,
                'attr_id' => $attrgoods->attr_id,
                'attr_name' => $currentRow['attr_name'],
                'value' => $attrgoods->value,
                'type' => $currentRow['attr_type'],
                'suffix' => $currentRow['attr_suffix']

            ];
        }
        return $attrGoodsList;
    }

    public function attrs() {
        return $this->belongsToMany('App\Models\Attr');
    }

    public function attrgoods() {
        return $this->hasMany('App\Models\AttrGoods');
    }
    
    public function galleries() {
        return $this->hasMany('App\Models\GalleryGoods');
    }

    public function categories() {
        return $this->belongsToMany('App\Models\Category');
    }

    public function detail($id) {
        $info = $this->find($id);
        return $info;
    }
}
