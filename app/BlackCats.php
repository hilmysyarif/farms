<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlackCats extends Model
{

    public function restrict()
    {
        echo 'be restricted';
    }
}
