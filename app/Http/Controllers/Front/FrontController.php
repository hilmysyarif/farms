<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    protected $navs;
    public function __construct(Category $category) {
        $this->navs = $category->tops();

        $cats = $category->orgCats();
        echo '<pre>';
        print_r($cats);
        echo '</pre>';
        exit;

    }
}
