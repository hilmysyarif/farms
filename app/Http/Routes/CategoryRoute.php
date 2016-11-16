<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class CategoryRoute {

    public function map(Registrar $router) {
        
        $router->get('/categories', 'Console\Categories\CategoriesController@index');
        $router->get('/categories/subcateslist/{pid}', 'Console\Categories\CategoriesController@subCatesList');

        $router->get('/categories/subs/{pid}', 'Console\Categories\CategoriesController@subCategories');
        $router->get('/categories/add', 'Console\Categories\CategoriesController@add');
        $router->post('/categories/add', 'Console\Categories\CategoriesController@postAdd');
        $router->get('/categories/edit/{id}', 'Console\Categories\CategoriesController@edit');
        $router->post('/categories/edit', 'Console\Categories\CategoriesController@postEdit');
        $router->get('/categories/delete/{id}', 'Console\Categories\CategoriesController@delete');
    }
}