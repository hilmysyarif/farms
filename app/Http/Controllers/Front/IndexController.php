<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Category $category, Slider $slider, Article $article) {
        $navs = $category->tops();
        $sliders = $slider->fetchAll();

        // Top four articles.
        $articles = $article->topArticles();

        return view('front/welcome', [
            'navs' => $navs,
            'sliders' => $sliders,
            'articles' => $articles
        ]);
    }
}
