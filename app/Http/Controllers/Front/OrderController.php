<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends FrontController {

    public function index() {
        return view('front/order', ['navHtml' => $this->navHtml]);
    }
}
