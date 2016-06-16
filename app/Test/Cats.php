<?php

namespace App\Test;

/**
 * Created by PhpStorm.
 * User: rex
 * Date: 7/6/2016
 * Time: 21:49
 */
class Cats
{
    private $legsNumber;

    public function __construct ()
    {
        $this->legsNumber = 4;
    }

    public function miao()
    {
        echo 'miao';
    }

    public function restrict()
    {
        echo 'must be cat';
    }

}