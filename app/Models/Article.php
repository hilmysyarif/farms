<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function store($data) {
        $this->title = $data['title'];
        $this->author = $data['author'];
        $this->category_id = $data['category_id'];
        $this->status = $data['status'];
        $this->content = $data['content'];

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
}
