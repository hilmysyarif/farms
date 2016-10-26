<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AtrcatRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            $router->get('/atrcat', 'Console\Attributes\AtrcatController@index');
            $router->get('/atrcat/add', 'Console\Attributes\AtrcatController@add');
            $router->post('/atrcat/add', 'Console\Attributes\AtrcatController@postAdd');
            $router->get('/atrcat/revoke/{cid}/{attr_id}', 'Console\Attributes\AtrcatController@revoke');
            $router->get('/atrcat/delete/{id}', 'Console\Attributes\AtrcatController@delete');
            $router->get('/atrcat/sublist/{id}', 'Console\Attributes\AtrcatController@sublist');

            $router->get('/atrcat/attributes/associate/{cid}', 'Console\Attributes\AtrcatController@asAttr');
            $router->post('/atrcat/attributes/associate', 'Console\Attributes\AtrcatController@postAsAttr');
        });
    }
}