<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class IndexRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {


            $router->get('/', 'Front\IndexController@index');
            $router->get('/list/{id}', 'Front\ListController@index');
            $router->auth();
            $router->get('/home', 'HomeController@index');
            $router->get('/console', 'Console\HomeController@index');

//            $router->auth();
//            $router->get('/blog', ['as' => 'index.blog', 'uses' => 'BlogController@index']);
        });
    }
}