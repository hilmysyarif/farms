<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ArticleRoute {

    public function map(Registrar $router) {

        $router->group(['middleware' => 'auth'], function ($router) {
            $router->get('/articles', 'Console\Articles\ArticlesController@index');
            $router->get('/articles/add', ['middleware' => 'permission:article_add', 'uses' => 'Console\Articles\ArticlesController@add']);
            $router->post('/articles/add', ['middleware' => 'permission:article_add', 'uses' => 'Console\Articles\ArticlesController@postAdd']);
            $router->get('/articles/edit/{id}', ['middleware' => 'permission:view_article_detail', 'uses' => 'Console\Articles\ArticlesController@edit']);
            $router->post('/articles/edit', ['middleware' => 'permission:view_article_detail', 'uses' => 'Console\Articles\ArticlesController@postEdit']);
            $router->get('/articles/delete/{id}', ['middleware' => 'permission:delete_article', 'uses' => 'Console\Articles\ArticlesController@delete']);
        });

        $router->get('/article/{id}', 'Front\ArticleController@index');
    }
}