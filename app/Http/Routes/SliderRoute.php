<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class SliderRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            $router->get('/sliders', 'Console\Settings\SlidersController@index');
            $router->get('/sliders/add', 'Console\Settings\SlidersController@add');
            $router->post('/sliders/add', 'Console\Settings\SlidersController@postAdd');
            $router->get('/slider/edit/{id}', 'Console\Settings\SlidersController@edit');
            $router->post('/slider/edit', 'Console\Settings\SlidersController@postEdit');
            $router->get('/slider/delete/{id}', 'Console\Settings\SlidersController@delete');
        });
    }
}