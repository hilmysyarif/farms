<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class IndexRoute {

    public function map(Registrar $router) {
        $router->get('/', 'Front\IndexController@index');
        $router->get('/list/{id}/{page?}', 'Front\ListController@index');
        $router->auth();
        $router->get('/home', 'HomeController@index');
        $router->post('/home/testvalidation', 'HomeController@testValidation');
//        $router->get('/console', ['middleware' => 'permission:enter_console', 'uses' => 'Console\HomeController@index']);
        $router->get('/console', ['middleware' => 'guardian.console', 'uses' => 'Console\HomeController@index']);
    }
}