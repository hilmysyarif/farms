<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends ConsoleController
{
    public function index() {
        return display('console/home');
    }
}
