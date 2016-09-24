<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function fetchBlock($parent_id = 0, $page = 0) {
        $list =  Category::where('parent_id', $parent_id)
            ->orderBy('sort_order','asc')
            ->skip($page * 10)
            ->take(10)
            ->get()
            ->toArray();

        foreach($list as $k=>$v) {
            $list[$k]['subcount'] = $this->scalarChildren($v['id']);
        }
        return $list;
    }

    public function fetchByParent($parent_id = 0) {
        $list =  Category::where('parent_id', $parent_id)
            ->orderBy('sort_order','asc')
            ->get()
            ->toArray();

        foreach($list as $k=>$v) {
            $list[$k]['subcount'] = $this->scalarChildren($v['id']);
        }
        return $list;
    }

    public function updateOne(Array $data, Int $id) {
        return Category::where('id', $id)->update($data);
    }

    public function remove(Int $id) {
        return Category::destroy($id);
    }

    public function store(String $name, Int $parent_id, Int $sort) {
        $this->name = $name;
        $this->parent_id = $parent_id;
        $this->sort_order = $sort;
        
        return $this->save();
    }

    public function fetchOne(Int $id) {
        return Category::find($id);
    }

    private function scalarChildren($pid) {
        return Category::where('parent_id', $pid)->count();
    }
}
