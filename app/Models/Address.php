<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class Address extends Model
{
    protected $table = 'addresses';

    /**
     * Save data to database.
     *
     * @param Request $request
     * @return bool
     */
    public function store(Request $request) {
        $this->user_id = $request->user()->id;
        $this->zone_id = $request->zone_id;
        $this->detail = $request->detail;

        return $this->save();
    }

    /**
     * Update data of specific row.
     *
     * @param Request $request
     * @return bool|int
     */
    public static function update(Request $request) {
        return Address::where('id', $request->user()->id)->update([
            'user_id' => $request->user()->id,
            'zone_id' => $request->zone_id,
            'detail' => $request->detail
        ]);
    }

    /**
     * Remove one row according to its primary key.
     *
     * @param Int $id
     * @return int
     */
    public static function remove(Int $id) {
        return Address::destroy($id);
    }

    /**
     * Retrieve all addresses that belongs to one person.
     *
     * @param Int $user_id
     */
    public static function retrieve(Int $user_id) {
        return Address::where('user_id', $user_id)->get();
    }


    /**
     * Retrieve one address by its primary key.
     *
     * @param Int $id
     */
    public static function retrieveOne(Int $id) {
        return Address::find($id);
    }


    /**
     * Set specific address as one's default address.
     *
     * @param Int $id
     * @return bool
     */
    public function setDefault(Int $id) {

        $res = true;
        DB::beginTransaction();
        $res1 = $this->update(['default' => false]);
        $res2 = Address::where('id', $id)->update(['default', true]);

        if ($res1 && $res2)
            DB::commit();
        else {
            DB::rollBack();
            $res = false;
        }
        return $res;
    }
}
