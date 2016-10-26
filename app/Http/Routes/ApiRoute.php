<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ApiRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            $router->get('/api/attrsByAtrcat/{cid}', 'Api\Goods\GoodsController@attrsByAtrcat');
        });
    }
}