<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class RoleRoute {

    public function map(Registrar $router) {

        $router->get('/roles/{page?}', 'Console\Settings\RolesController@index')
            ->where('page', '\d+');
        $router->match(['get', 'post'], '/roles/add', 'Console\Settings\RolesController@add');
        $router->match(['get', 'post'], '/role/edit/{id}', 'Console\Settings\RolesController@edit');
        $router->get('/role/delete/{id}', 'Console\Settings\RolesController@remove');
    }
}