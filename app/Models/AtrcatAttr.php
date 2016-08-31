<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AtrcatAttr extends Model
{
    protected $table = 'atrcat_attr';

    public function store(String $atrcat_id, Array $attr_ids) {

        $data = [];
        foreach ($attr_ids as $v) {
            $data[] = [
                'atrcat_id' => $atrcat_id,
                'attr_id' => $v
            ];
        }
        return $this->insert($data);
    }

    public function remove($cid, $attr_id) {
        return AtrcatAttr::where('atrcat_id', $cid)
                ->where('attr_id', $attr_id)
                ->delete();
    }
}
