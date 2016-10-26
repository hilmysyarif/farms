<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class DetailRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            //$router->auth();
            //$router->get('/blog', ['as' => 'index.blog', 'uses' => 'BlogController@index']);

            $router->get('/cart', 'Front\CartController@index');
            $router->post('/cart', 'Front\CartController@postAdd');
        });
    }
}