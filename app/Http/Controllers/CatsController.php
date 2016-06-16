<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test\Cats;
use Auth;
use App\Http\Requests;

class CatsController extends Controller
{

    protected $guard = 'bcats';

    public function __construct()
    {
        
    }

    public function isCat(Cats $cat)
    {
        $cat->miao();
    }

    public function restrict()
    {
        echo 'start<br>';
        $a = Auth::guard($this->guard);
        var_dump($a);
        Auth::guard($this->guard)->restrict();
    }
}
