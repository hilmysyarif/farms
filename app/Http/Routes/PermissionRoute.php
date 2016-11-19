<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class PermissionRoute {

    public function map(Registrar $router) {
        $router->get('/permissions/{page?}', 'Console\Settings\PermissionController@index')
            ->where('page', '\d+');
        $router->match(['get', 'post'], '/permissions/add', 'Console\Settings\PermissionController@add');
        $router->get('/permission/delete/{id}', 'Console\Settings\PermissionController@remove');
        $router->match(['get', 'post'], '/permission/edit/{id}', 'Console\Settings\PermissionController@edit');
    }
}