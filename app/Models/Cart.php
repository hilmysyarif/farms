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
}
