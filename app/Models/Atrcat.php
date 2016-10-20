<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atrcat extends Model
{
    protected $table = 'atrcat';

    public function store($name) {

        return $this->insertGetId([
            'name' => $name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function fetchBlock(Int $page = 0) {
        $list = $this->skip($page * 10)->take(10)->get()->toArray();
        return $list;
    }

    public function fetchAll() {
        $list = $this->get()->toArray();
        return $list;
    }

    public function attrs() {
        return $this->belongsToMany('App\Models\Attr');
    }

    /**
     * fetch attributes via atrcat_id.
     * @param $id
     * @return array
     */
    public function fetchAttrs($id) {
        $row = $this->find($id);
        $list = [];
        foreach ($row->attrs as $attr) {
            $list[] = [
                'id' => $attr->id,
                'name' => $attr->name,
                'type' => $attr->type,
                'suffix' => $attr->suffix
            ];
        }
        return $list;
    }

    public function remove($cid) {
        return Atrcat::destroy($cid);
    }

    public function row($cid) {
        return Atrcat::where('id', $cid)->first();
    }
}
