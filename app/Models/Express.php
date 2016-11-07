<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Express extends Model
{
    protected $table = 'expresses';


    /**
     * Store one express record.
     *
     * @param String $name
     * @param String $config
     */
    public function store(String $name, String $config) {
        $this->name = $name;
        $this->cofig = $config;
        $this->save();
    }


    /**
     * Retrieve one record of specific express.
     *
     * @param Int $id
     * @return mixed
     */
    public function retrieveOne(Int $id) {
        return Express::find($id);
    }


    /**
     * Update one record of express.
     *
     * @param array $data
     * @param Int $id
     */
    public function updateOne(Array $data, Int $id) {
        return Express::where('id', $id) -> save($data);
    }


    /**
     * Remove one record of express.
     *
     * @param Int $id
     * @return int
     */
    public function removeOne(Int $id) {
        return Express::destroy($id);
    }


    /**
     * Retrieve default express information.
     *
     * @return \stdClass
     */
    public static function default() {
        $tmp = new \stdClass();
        $tmp->shippingFee = 10;
        return $tmp;
    }
}
