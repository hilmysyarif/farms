<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public static function isAdmin(User $user) {
        return self::where('user_id', $user->id)->first();
    }
}
