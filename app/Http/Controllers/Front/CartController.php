<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends FrontController {

    public function index() {
        return view('front/cart', ['navHtml' => $this->navHtml]);
    }

    public function postAdd(Request $request) {
        $atrgids = $request->atrgids;
        $number = $request->number;
        $user_id = $request->user()->id;
    }
}
