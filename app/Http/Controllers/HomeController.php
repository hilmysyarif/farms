<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Front\FrontController;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends FrontController
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front/home');
    }


    public function testValidation(Request $request) {
        $this->validate($request, [
            'test' => 'required|numeric|between:110000,820000'
        ]);
        echo 'tested:<br>';
    }
}
