<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

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

    public function tops() {
        $list =  Category::where('parent_id', 0)
            ->orderBy('sort_order','asc')
            ->get()
            ->toArray();
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

    private function fetchAll() {
        $list =  $this->get()->toArray();

        return $list;
    }

    /**
     * Organize categories with its children.
     *
     * @return mixed
     */
    public function orgCats() {
        // Get all categories.
        $cats = $this->fetchAll();

        // Get topest categories.
        $tops = [];
        foreach($cats as $v) {
            if ($v['parent_id'] == 0) {
                $tops[] = $v;
            }
        }

        // Attach its children.
        $tops = $this->itemsChildren($tops, $cats);
        return $tops;
    }


    /**
     * Check if specific item has its children.
     *
     * @param $item
     * @return bool
     */
    private function hasChildren($item) {
        if(array_key_exists('children', $item))
            return true;
        return false;
    }


    /**
     * Attach children recursively.
     *
     * @param $items
     * @param $allCats
     * @return mixed
     */
    private function itemsChildren($items, $allCats) {

        $recursiveA = function(&$item, $key, $mixedData) {
            if ($this->hasChildren($item)) {
                array_walk($item['children'], $mixedData['callBack'], $mixedData);
            } else {
                $children = $this->children($mixedData['data'], $item['id']);
                $item['children'] = $children;
                if (count($children) > 0) {
                    array_walk($item['children'], $mixedData['callBack'], $mixedData);
                }
            }
        };

        $mixedData = ['data' => $allCats, 'callBack' => $recursiveA];
        array_walk($items, $recursiveA, $mixedData);
        return $items;
    }

    /**
     * Get children of specific category.
     *
     * @param $allCats
     * @param $id
     * @param array $res
     * @return array
     */
    private function children($allCats, $id, $res = []) {
        foreach($allCats as $cat) {
            if ($id == $cat['parent_id']) {
                $res[] = $cat;
            }
        }
        return $res;
    }
}
