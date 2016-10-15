<?php

namespace App\Http\Controllers\Front;

use App\Models\Goods;
use Illuminate\Http\Request;
use App\Http\Requests;

class GoodsController extends FrontController{
    
    public function index($id, Goods $goods) {


        $row = $goods->detail($id);
//        print_r($row->attrgoods);
//        echo '<br>';
//        echo '<hr>';
//        print_r($row->attrgoods[0]->attr);
//        echo '<br>';
//        echo '<hr>';
//        print_r($row->galleries);
//        foreach($info->attrgoods  as $k => $attrgood) {
//            $attrgood->attr;
//        }
//        $galleries = $info->galleries;
//        $info['attrgoods'] = $attrgoods;
//        $info['galleries'] = $galleries;


        return view('front/detail', [
            'navHtml' => $this->navHtml,
            'row' => $row
        ]);
    }
}
