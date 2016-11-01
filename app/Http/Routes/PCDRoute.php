<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class PCDRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            $router->get('/api/pcs', 'Api\Tasks\PCDController@index');
        });
    }
}