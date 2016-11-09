<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Slider;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends FrontController {

    public function index() {
        $sliders = Slider::fetchAll();

        // Top four articles.
        $articles = Article::topArticles();

        return view('front/welcome', [
            'sliders' => $sliders,
            'articles' => $articles
        ]);
    }
}
