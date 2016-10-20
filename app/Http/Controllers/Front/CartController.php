<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends FrontController {

    public function index() {
        return view('front/cart', ['navHtml' => $this->navHtml]);
    }
}
