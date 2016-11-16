<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class PCDRoute {

    public function map(Registrar $router) {
        $router->get('/api/pcd', 'Api\Tasks\PCDController@index');
    }
}