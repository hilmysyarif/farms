<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller {

    protected $navHtml;
    public function __construct() {

        $this->middleware('web');

        $category = new Category();
        $cats = $category->orgCats();
        $this->buildNavs($cats);

        view()->share('navHtml', $this->navHtml);
    }

    private function buildNavs($cats) {
        $this->navHtml = '<li class="dropdown">'.
                '<a data-toggle="dropdown" href="#">'.$cats[0]['name'].'<span class="caret"></span></a>'.
                '<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">';
        $this->itemsHtml($cats[0]['children']);
    }


    /**
     * Organize html for navs.
     *
     * @param $items. Should not pass the first level of items.
     * @param $html
     * @return mixed
     */
    private function itemsHtml($items) {
        $recursive = function($item, $key, $mixedData) {

            if (count($item['children']) > 0) {
                // It has children.
                $this->navHtml .= '<li class="dropdown-submenu">';
                $this->navHtml .= '<a tabindex="-1" href="#">'.$item['name'].'</a>';
                $this->navHtml .= '<li class="dropdown-submenu">';

                array_walk($item['children'], $mixedData['callBack'], $mixedData);
            } else {
                // Only itself.
                $this->navHtml .= '<li><a href="/list/'.$item['id'].'">'.$item['name'].'</a></li>';
            }

            // When stepping out from recursive, should go reversely.
            $this->navHtml .= '</ul>';
            $this->navHtml .= '</li>';
            return $mixedData;
        };

        $mixedData = ['callBack' => $recursive];
        array_walk($items, $recursive, $mixedData);
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
