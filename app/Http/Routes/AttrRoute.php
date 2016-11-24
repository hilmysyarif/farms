<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AttrRoute {
    
    public function map(Registrar $router) {
        $router->group(['middleware' => 'auth'], function ($router) {
            $router->get('/attr', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AttrController@index']);
            $router->get('/attr/add', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AttrController@add']);
            $router->post('/attr/add', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AttrController@postAdd']);
            $router->get('/attr/edit/{id}', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AttrController@edit']);
            $router->post('/attr/edit', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AttrController@postEdit']);

            $router->get('/attr/delete/{id}', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Attributes\AttrController@delete']);
        });
        
    }
}