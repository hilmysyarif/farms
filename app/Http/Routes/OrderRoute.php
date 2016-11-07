<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class OrderRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'auth'], function ($router) {
            $router->get('/orders', 'Console\Orders\OrdersController@index');
            $router->get('/checkout', 'Front\OrderController@checkout');
            $router->post('/confirm', 'Front\OrderController@confirm');
            $router->get('/myorders', 'Front\OrderController@mine');
        });
    }
}