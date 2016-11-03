<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AddressRoute
{
    public function map(Registrar $router)
    {
        $router->get('/address', 'Front\AddressController@index');
        $router->get('/address/add', 'Front\AddressController@add');
        $router->post('/address/add', 'Front\AddressController@postAdd');
    }
}