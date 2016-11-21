<?php

namespace App\Models;

use Illuminate\Http\Request;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public static function fetchBlock($page = 1, $size = 10) {
        return self::skip(($page - 1) * $size)
            ->take($size)
            ->get();
    }

    public function store(Request $request) {
        $this->name = $request->name;
        $this->display_name = $request->display_name;
        $this->description = $request->description;
        return $this->save();
    }

    public static function updateOne($id, $data) {
        return self::where('id', $id)->update($data);
    }
    
    public function permissions() {
        return $this->belongsToMany('App\Models\Permission');
    }

    public function permissionRole() {
        return $this->hasMany('App\Models\PermissionRole');
    }
}
