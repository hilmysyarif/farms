<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Category $category) {
        $navs = $category->tops();
        return view('front/welcome', ['navs' => $navs]);
    }
}
