<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class CartRoute
{
    public function map(Registrar $router)
    {
        $router->post('/order', 'Front\OrderController@index');
        $router->get('/order', 'Front\OrderController@index');
    }
}