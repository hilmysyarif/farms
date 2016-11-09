<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends FrontController {

    public function index($id) {
        $row = Article::fetchOne($id);
        return view('front/article', ['row' => $row]);
    }
}
