<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AddressRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'auth'], function ($router) {
            $router->get('/address', 'Front\AddressController@index');
            $router->get('/address/add', 'Front\AddressController@add');
            $router->post('/address/add', 'Front\AddressController@postAdd');
            $router->get('/address/{id}/edit', 'Front\AddressController@edit');
            $router->post('/address/{id}/edit', 'Front\AddressController@postEdit');
            $router->get('/address/{id}/remove', 'Front\AddressController@remove');
        });
    }
}