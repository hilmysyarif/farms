<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AddressRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            $router->get('/addresses', 'Front\AddressController@index');
        });
    }
}