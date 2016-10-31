<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class CartRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web', 'auth']], function ($router) {
            //$router->auth();
            //$router->get('/blog', ['as' => 'index.blog', 'uses' => 'BlogController@index']);
            $router->post('/order', 'Front\OrderController@index');
            $router->get('/order', 'Front\OrderController@index');
        });
    }
}