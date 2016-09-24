<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public static function isAdmin(User $user) {
        return self::where('user_id', $user->id)->first();
    }

    /**
     * @param Int $id
     * @return bool
     */
    public function setAsAdmin(Int $id) {
        $this->user_id = $id;
        $this->permission = "";
        return $this->save();
    }

    /**
     * @param String $permission
     * @param Int $id
     * @return mixed
     */
    public function updatePermission(String $permission, Int $id) {
        return Admin::where('user_id', $id)->update([
            'permission' => $permission
        ]);
    }


    /**
     * @param Int $id
     * @return mixed
     */
    public function retrievePermission(Int $id) {
        return Admin::where('user_id', $id)->first();
    }
}
