<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ListRoute
{
    public function map(Registrar $router)
    {
        $router->get('/detail/{id}', 'Front\GoodsController@index');
    }
}