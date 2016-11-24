<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class OrderRoute {

    public function map(Registrar $router) {

        $router->group(['middleware' => 'auth'], function ($router) {

            $router->get('/checkout', 'Front\OrderController@checkout');
            $router->post('/confirm', 'Front\OrderController@confirm');
            $router->get('/myorders', 'Front\OrderController@mine');


            $router->get('/orders/{page?}', 'Console\Orders\OrdersController@index')
                ->where('page', '\d+');
            $router->get('/order/view/{id}', 'Console\Orders\OrdersController@view')
                ->where('id', '\d+');
            $router->match(['get', 'post'], '/order/edit/{id}', 'Console\Orders\OrdersController@edit')
                ->where('id', '\d+');
            $router->get('/order/delete/{id}', 'Console\Orders\OrdersController@delete')
                ->where('id', '\d+');

        });
    }
}