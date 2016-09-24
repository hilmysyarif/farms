<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    protected $table = 'attr';

    public function store(String $name, String $suffix = '', String $type = 'text') {
        $this->name = $name;
        $this->suffix = $suffix;
        $this->type = $type;
        return $this->save();
    }

    public function fetchBlock(Int $page = 0) {
        return Attr::orderBy('created_at', 'desc')->skip($page * 10)->take(10)->get();
    }

    public function fetchAll() {
        return $this->get()->toArray();
    }

    public function fetchOne(Int $id) {
        return Attr::find($id);
    }

    public function remove(Int $id) {
        return Attr::destroy($id);
    }

    public function updateOne(Array $data, Int $id) {
        return Attr::where('id', $id)->update($data);
    }

    public function attributes() {
        return Attr::all()->toArray();
    }

    public function fetchByIds(Array $ids) {
        return Attr::whereIn('id', $ids)->get()->toArray();
    }
}
