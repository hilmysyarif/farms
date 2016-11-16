<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class PermissionRoute {

    public function map(Registrar $router) {
        $router->get('/permissions', 'Console\Settings\PermissionController@index');
    }
}