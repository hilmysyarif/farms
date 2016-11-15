<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public static function fetchBlock($page = 1, $size = 10) {
        return self::skip(($page - 1) * $size)
            ->take($size)
            ->get();
    }

    
}
