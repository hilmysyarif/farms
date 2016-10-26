<?php

namespace App\Http\Controllers\Front;

use App\Models\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends FrontController {

    public function index() {
        return view('front/cart', ['navHtml' => $this->navHtml]);
    }

    public function postAdd(Request $request, Cart $cart) {
        $cart->store($request);
        return redirect('/cart');
    }
}
