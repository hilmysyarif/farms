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
    public function store(Array $data) {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
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
    public static function fetchByIds(Array $ids, $page = 1, $size = 10) {
        return Goods::whereIn('id', $ids)->skip(($page - 1) * $size)->take($size)->get()->toArray();
    }

    /**
     * @param int $page
     * @param int $size
     * @return mixed
     */
    public static function fetchBlock($page = 1, $size = 10) {
        return self::select('id', 'name', 'cover_url', 'sort')
            ->skip(($page - 1) * $size)->take($size)->get();
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

    public function articlesGoods() {
        return $this->hasOne('App\Models\ArticlesGoods');
    }

    public function article() {
        return $this->belongsTo('App\Models\Article');
    }

    public function categoryGoods() {
        return $this->hasOne('App\Models\CatsGoods');
    }

    public function detail($id) {
        $info = $this->find($id);
        $attrs = [];
        $tmp = [];
        foreach ($info->attrgoods as $atrg) {
            if (!in_array($atrg->attr_id, $tmp)) {
                $tmp[] = $atrg->attr_id;
                $attrs[] = [
                    'attr_id' => $atrg->attr_id,
                    'name' => $atrg->attr->name,
                    'type' => $atrg->attr->type,
                    'suffix' => $atrg->attr->suffix
                ];
            }
        }

        foreach ($attrs as $k => $attr) {
            $values = [];
            foreach ($info->attrgoods as $atrg) {
                if ($atrg->attr_id == $attr['attr_id']) {
                    $values[] = [
                        'id' => $atrg->id,
                        'value' => $atrg->value,
                        'price' => $atrg->price
                    ];
                }
            }
            $attrs[$k]['values'] = $values;
        }
        $info->ats = $attrs;
        return $info;
    }
}
