<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class OrderRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            $router->get('/orders', 'Console\Orders\OrdersController@index');
        });
    }
}