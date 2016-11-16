<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AttrRoute {
    
    public function map(Registrar $router) {
        $router->get('/attr', 'Console\Attributes\AttrController@index');
        $router->get('/attr/add', 'Console\Attributes\AttrController@add');
        $router->post('/attr/add', 'Console\Attributes\AttrController@postAdd');
        $router->get('/attr/edit/{id}', 'Console\Attributes\AttrController@edit');
        $router->post('/attr/edit', 'Console\Attributes\AttrController@postEdit');

        $router->get('/attr/delete/{id}', 'Console\Attributes\AttrController@delete');
        
    }
}