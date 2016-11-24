<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AtrcatRoute {
    
    public function map(Registrar $router) {
        $router->group(['middleware' => 'auth'], function ($router) {
            $router->get('/atrcat', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AtrcatController@index']);
            $router->get('/atrcat/add', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AtrcatController@add']);
            $router->post('/atrcat/add', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AtrcatController@postAdd']);
            $router->get('/atrcat/revoke/{cid}/{attr_id}', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AtrcatController@revoke']);
            $router->get('/atrcat/delete/{id}', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AtrcatController@delete']);
            $router->get('/atrcat/sublist/{id}', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AtrcatController@sublist']);

            $router->get('/atrcat/attributes/associate/{cid}', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AtrcatController@asAttr']);
            $router->post('/atrcat/attributes/associate', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AtrcatController@postAsAttr']);
        });
    }
}