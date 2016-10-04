<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;

class ListController extends FrontController {

    public function index() {

        return view('front/list', [
            'navs' => $this->navs
        ]);
    }
}
