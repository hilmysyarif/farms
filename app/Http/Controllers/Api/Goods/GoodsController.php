<?php

namespace App\Http\Controllers\Api\Goods;

use App\Models\Atrcat;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    public function attrsByAtrcat($cid, Atrcat $atrcat) {
        $attrs = $atrcat->fetchAttrs($cid);
        return response()->json($attrs);
    }
}
