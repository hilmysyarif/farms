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
     * @return void
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
}
