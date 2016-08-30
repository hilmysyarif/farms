<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
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
        return Good::where('id', $goods_id)->update($data);
    }


    /**
     * Update cover url of specific good.
     *
     * @param Int $goods_id
     * @param String $cover_url
     * @return mixed
     */
    public function updateCover(Int $goods_id, String $cover_url) {
        return Good::where('id', $goods_id)->update([
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
        return Good::destroy($id);
    }


    /**
     * @param $page
     * @return mixed
     */
    public function fetchBlock($page = 0) {
        return Good::skip($page * 10)->take(10)->get()->toArray();
    }
}
