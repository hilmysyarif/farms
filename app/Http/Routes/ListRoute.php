<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ListRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            //$router->auth();
            //$router->get('/blog', ['as' => 'index.blog', 'uses' => 'BlogController@index']);

            $router->get('/detail/{id}', 'Front\GoodsController@index');
        });
    }
}