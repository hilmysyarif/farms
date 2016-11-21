<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class UserRoute {

    public function map(Registrar $router) {

        $router->get('/users/{page?}', 'Console\Users\UsersController@index');
        $router->get('/admins', 'Console\Users\UsersController@adminList');
        $router->get('/user/edit/{id?}', 'Console\Users\UsersController@edit')
            ->where('id', '\d+');
        $router->get('/user/granted/{id?}', 'Console\Users\UsersController@granted')
            ->where('id', '\d+');
        $router->match(['get', 'post'], '/user/grant/{id}', 'Console\Users\UsersController@grant')
            ->where('id', '\d+');
        $router->get('/user/revokegrant/{user_id}/{id}', 'Console\Users\UsersController@revokegrant')
            ->where('user_id', '\d+')
            ->where('id', '\d+');
    }
}