<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class OrderRoute
{
    public function map(Registrar $router)
    {
        $router->get('/orders', 'Console\Orders\OrdersController@index');
    }
}