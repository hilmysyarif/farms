<?php

namespace App\Http\Controllers_namePath_;

/**
 * Generated by RTKit.
 */

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class _className_ extends _parentClassName_ {

    public function index() {
        return view();
    }

    public function add(Request $request) {

        if ($request->isMethod('post')) {
            return redirect();
        }
        return view();
    }

    public function edit(Request $request, $id) {
        if ($request->isMethod('post')) {
            return redirect();
        }
        return view();
    }

    public function remove($id) {
        return redirect(url());
    }
}
