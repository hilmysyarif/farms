<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function store($data) {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
        return $this->save();
    }

    public function fetchBlock($page = 0) {
        $list = $this->skip($page * 10)->take(10)->get();
        foreach ($list as $k => $lst) {
            $list[$k]->category_name = $lst->category->name;
        }
        return $list->toArray();
    }

    
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public static function fetchOne($id) {
        return $row = Article::find($id);
    }

    public function updateOne($id, $data) {
        return Article::where('id', $id)->update($data);
    }

    public function remove($id) {
        return Article::destroy($id);
    }

    public static function topArticles() {
        return Article::orderBy('id', 'desc')->skip(0)->take(4)->get();
    }

    public function goodsArticles() {
        $settedIds = Goods::where('article_id', '<>', 0)->pluck('article_id');
        $list = $this->select('id', 'title as name')
            ->whereNotIn('id', $settedIds)
            ->where('status', 1)
            ->get();
        return $list;
    }
}
