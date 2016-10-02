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

    public function fetchOne($id) {
        $row = Article::find($id);
        $row->category_name = $row->category->name;
        return $row->toArray();
    }

    public function updateOne($id, $data) {
        return Article::where('id', $id)->update($data);
    }

    public function remove($id) {
        return Article::destroy($id);
    }

    public function topArticles() {
        return $this->orderBy('id', 'desc')->skip(0)->take(4)->get();
    }
}
