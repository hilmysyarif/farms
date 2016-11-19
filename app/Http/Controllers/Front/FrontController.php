<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller {

    protected $navHtml;
    protected $breadcrumbs;
    public function __construct() {

        $this->middleware('web');

        $this->breadcrumbs[] = [
            'url' => url('/'),
            'name' => trans('common.home_page')
        ];

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
     * @param $items . Should not pass the first level of items.
     * @return mixed
     * @internal param $html
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


    /**
     * Get pages array of specific data.
     *
     * @param $urlPrefix
     * @param $pagesCount
     * @param int $currentPage
     * @param int $pageSize
     * @return array
     */
    public static function pages($urlPrefix, $pagesCount, $currentPage = 1, $pageSize = 5) {
        if ($pagesCount <= 1)
            return [];

        // group by size.
        $tmp = array_chunk(range(1, $pagesCount), $pageSize);
        // get the group which current page belongs.
        $group = [];
        foreach ($tmp as $k => $v) {
            if (in_array($currentPage, $v)) {
                if ($k != 0 && $k == count($tmp) - 1) {
                    $group = $v;
                } else {
                    if (count($v) == 5)
                        $group = $v;
                }
                break;
            }
        }

        // If there is no pages, do not attach arrows below.
        if (empty($group))
            return $group;

        $callback = function (&$item, $key, $mixedData) {
            $item = [
                'url' => url($mixedData['urlPrefix'].'/'.$item),
                'liClass' => $item == $mixedData['currentPage'] ? 'active' : '',
                'aClass' => '',
                'text' => $item
            ];
        };

        array_walk($group, $callback, ['urlPrefix' => $urlPrefix, 'currentPage' => $currentPage]);

        // attach forward and backward.
        if ($currentPage > 1)
            array_unshift($group, [
                'url' => url($urlPrefix.'/'.$currentPage - 1),
                'liClass' => '',
                'aClass' => 'fa fa-chevron-left',
                'text' => ''
            ]);
        if ($pagesCount > $currentPage)
            $group[] = [
                'url' => url($urlPrefix.'/'.$currentPage + 1),
                'liClass' => '',
                'aClass' => 'fa fa-chevron-right',
                'text' => ''
            ];
        return $group;
    }
}
