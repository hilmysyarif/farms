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
        $this->atrgids = $request->atrgids;
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

    /**
     * Get item of current user in cart.
     */
    public function items(Request $request) {
        return $this->where('user_id', $request->user()->id)->get();
    }

    /**
     * Update number in cart according by id.
     *
     * @param $ids
     * @param $numbers
     * @return int
     */
    public static function updateQuantity($ids, $numbers) {
        $affected = 0;
        foreach ($ids as $k => $v) {
            if (Cart::where('id', $v)->update(['number' => $numbers[$k]]))
                $affected++;
        }
        return $affected;
    }
}
