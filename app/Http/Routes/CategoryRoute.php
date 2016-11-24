<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class CategoryRoute {

    public function map(Registrar $router) {

        $router->group(['middleware' => 'auth'],  function ($router) {
            $router->get('/categories', ['middleware' => 'permission:view_categories', 'uses' => 'Console\Categories\CategoriesController@index']);
            $router->get('/categories/subcateslist/{pid}', 'Console\Categories\CategoriesController@subCatesList');

            $router->get('/categories/subs/{pid}', 'Console\Categories\CategoriesController@subCategories');
            $router->get('/categories/add', ['middleware' => 'permission:add_categories', 'uses' => 'Console\Categories\CategoriesController@add']);
            $router->post('/categories/add', ['middleware' => 'permission:add_categories', 'uses' => 'Console\Categories\CategoriesController@postAdd']);
            $router->get('/categories/edit/{id}', ['middleware' => 'permission:view_category_detail', 'uses' => 'Console\Categories\CategoriesController@edit']);
            $router->post('/categories/edit', ['middleware' => 'permission:update_category', 'uses' => 'Console\Categories\CategoriesController@postEdit']);
            $router->get('/categories/delete/{id}', ['middleware' => 'permission:delete_category', 'uses' => 'Console\Categories\CategoriesController@delete']);
        });
    }
}