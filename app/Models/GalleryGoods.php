<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class GalleryGoods extends Model
{
    protected $table = 'gallery_goods';

    public function storeBatch(Array $data) {
        return $this->insert($data);
    }

    public function fetchOne($id) {
        return GalleryGoods::find($id)->toArray();
    }

    public function updateOne($id, $url) {
        return DB::table('gallery_goods')->where('id', $id)->update(['url' => $url]);
    }

    public function remove($id) {
        return GalleryGoods::destroy($id);
    }
}
