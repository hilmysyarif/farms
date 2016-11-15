<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class RoleRoute
{
    public function map(Registrar $router)
    {
        $router->get('/roles/{page?}', 'Console\Settings\RolesController@index');
    }
}