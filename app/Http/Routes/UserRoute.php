<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class UserRoute {

    public function map(Registrar $router) {

        $router->group(['middleware' => 'auth'], function ($router) {
            $router->get('/users/{page?}', 'Console\Users\UsersController@index');
            $router->get('/admins', 'Console\Users\UsersController@adminList');
            $router->get('/user/edit/{id?}', 'Console\Users\UsersController@edit')
                ->where('id', '\d+');

            $router->get('/user/granted/{id?}', ['middleware' => 'permission:grant_user', 'uses' => 'Console\Users\UsersController@granted'])
                ->where('id', '\d+');
            $router->match(['get', 'post'], '/user/grant/{id}', ['middleware' => 'permission:grant_user', 'uses' => 'Console\Users\UsersController@grant'])
                ->where('id', '\d+');
            $router->get('/user/revokegrant/{user_id}/{id}', ['middleware' => 'permission:grant_user', 'uses' => 'Console\Users\UsersController@revokegrant'])
                ->where('user_id', '\d+')
                ->where('id', '\d+');
        });
    }
}