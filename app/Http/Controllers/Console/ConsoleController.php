<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConsoleController extends Controller
{
    protected $tabs;
    protected $current_nav;
    protected $uri;

    public function __construct(){
        $tmp = explode('/', $_SERVER['REQUEST_URI']);
        $this->current_nav = $tmp[1];
        $this->uri = $_SERVER['REQUEST_URI'];
    }
}
