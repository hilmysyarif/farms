<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;

class GoodsController extends FrontController{
    
    public function index() {
        return view('front/detail', ['navHtml' => $this->navHtml]);
    }
}
