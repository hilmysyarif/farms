<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cart extends Model
{
    protected $table = 'cart';

    /**
     * Store data to database.
     *
     * @param Request $request
     * @return bool
     */
    public function store(Request $request) {
        $this->user_id = $request->user()->id;
        $this->goods_attr_id = $request->goods_attr_id;
        $this->number = $request->number;

        return $this->save();
    }

    /**
     * Clear the cart via user_id.
     *
     * @param Int $uid
     * @return mixed
     */
    public function clear(Int $uid) {
        return Cart::where('user_id', $uid)->delete();
    }


    /**
     * Clear one item via goods_attr_id and user_id.
     *
     * @param Int $uid
     * @param Int $goods_attr_id
     * @return mixed
     */
    public function clearOne(Int $uid, Int $goods_attr_id) {
        return Cart::where('user_id', $uid)->where('goods_attr_id', $goods_attr_id)->delete();
    }

    /**
     * Get goods from cart via one user's id.
     *
     * @param Int $uid
     * @return mixed
     */
    public function retrieveByUser(Int $uid) {
        return Cart::where('user_id', $uid)->get();
    }
}
