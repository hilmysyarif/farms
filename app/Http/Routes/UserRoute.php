<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class UserRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            $router->get('/users', 'Console\Users\UsersController@index');
            $router->get('/admins', 'Console\Users\UsersController@adminList');
        });
    }
}