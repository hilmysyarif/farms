<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class DetailRoute
{
    public function map(Registrar $router)
    {
        $router->get('/cart', 'Front\CartController@index');
        $router->post('/cart', 'Front\CartController@postAdd');
    }
}