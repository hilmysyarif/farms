<?php

namespace App\Http\Controllers\Front;

/**
 * Generated by RTKit.
 */

use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Requests;

class AddressController extends FrontController
{
    /**
     * Show addresses list of current user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, Address $address) {
        $list = $address->fetchByUser($request->user()->id);
        return view('front/address', [
            'list' => $list
        ]);
    }

    public function add() {

        return view('front/address_add');
    }

    public function postAdd(Request $request) {
        return redirect(url(''));
    }

    public function edit($id) {
        return view();
    }

    public function postEdit(Request $request) {
        return redirect(url(''));
    }

    public function remove($id) {
        return redirect(url(''));
    }
}
