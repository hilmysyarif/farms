<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public static function fetchBlock($page = 1, $size = 10) {
        return self::select('id', 'name', 'email')
            ->skip(($page - 1) * $size)
            ->take($size)
            ->get();
    }


    public function roles() {
        return $this->belongsToMany('App\Models\Role');
    }
}
