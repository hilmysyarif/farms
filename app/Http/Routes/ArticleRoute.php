<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ArticleRoute
{
    public function map(Registrar $router)
    {
        $router->get('/articles', 'Console\Articles\ArticlesController@index');
        $router->get('/articles/add', 'Console\Articles\ArticlesController@add');
        $router->post('/articles/add', 'Console\Articles\ArticlesController@postAdd');
        $router->get('/articles/edit/{id}', 'Console\Articles\ArticlesController@edit');
        $router->post('/articles/edit', 'Console\Articles\ArticlesController@postEdit');
        $router->get('/articles/delete/{id}', 'Console\Articles\ArticlesController@delete');
        $router->get('/article/{id}', 'Front\ArticleController@index');
    }
}