<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Slider;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends FrontController {

    public function index(Slider $slider, Article $article) {
        $sliders = $slider->fetchAll();

        // Top four articles.
        $articles = $article->topArticles();

        return view('front/welcome', [
//            'navHtml' => $this->navHtml,
            'sliders' => $sliders,
            'articles' => $articles
        ]);
    }
}
