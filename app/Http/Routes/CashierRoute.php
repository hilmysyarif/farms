<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class CashierRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'auth'], function ($router) {
            $router->get('/cashier/{no}', 'Front\CashierController@index');
        });
    }
}