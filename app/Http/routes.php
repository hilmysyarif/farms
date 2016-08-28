<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => 'web'], function() {
    Route::get('/', function () {
        return view('front/welcome');
    });

    Route::get('/list', function() {
        return view('front/list');
    });

    Route::get('/detail', function() {
        return view('front/detail');
    });

    Route::get('/cart', function() {
        return view('front/cart');
    });

    Route::post('/order', 'Order\OrderController@index');
    Route::get('/order', function() {
        return view('front/order');
    });

    Route::get('/test', function() {
        return response()->json(['name' => 'rex', 'id' => '1', 'description' => 'good student']);
    });

//    Route::group(['middleware' => 'auth.admin'], function() {
//        Route::get('/console', function() {
//            return 'You are authenticated!';
//        });
//    });
    
    Route::auth();

    Route::get('/home', 'HomeController@index');

//    Route::get('/console', function() {
//        return view('console/index');
//    });
    Route::get('/console', 'Console\HomeController@index');

    // goods
    Route::get('/goods', 'Console\Goods\GoodsController@index');
    Route::get('/goods/add', 'Console\Goods\GoodsController@add');

    Route::get('/categories', 'Console\Categories\CategoriesController@index');
    Route::get('/categories/subcateslist/{pid}', 'Console\Categories\CategoriesController@subCatesList');
    
    Route::get('/categories/subs/{pid}', 'Console\Categories\CategoriesController@subCategories');
    Route::get('/categories/add', 'Console\Categories\CategoriesController@add');
    Route::post('/categories/add', 'Console\Categories\CategoriesController@postAdd');
    Route::get('/categories/edit/{id}', 'Console\Categories\CategoriesController@edit');
    Route::post('/categories/edit', 'Console\Categories\CategoriesController@postEdit');
    Route::get('/categories/delete/{id}', 'Console\Categories\CategoriesController@delete');

    Route::get('/goods/attributes', 'Console\Attributes\AttributesNamesController@index');
    Route::get('/goods/attributes/add', 'Console\Attributes\AttributesNamesController@add');
    Route::post('/goods/attributes/add', 'Console\Attributes\AttributesNamesController@postAdd');

    Route::post('/goods/attributes/add', 'Console\Attributes\AttributesNamesController@postAdd');
    Route::get('/goods/attributes/edit/{id}', 'Console\Attributes\AttributesNamesController@edit');
    Route::post('/goods/attributes/edit', 'Console\Attributes\AttributesNamesController@postEdit');
    Route::get('/goods/attributes/delete/{id}', 'Console\Attributes\AttributesNamesController@delete');
    Route::get('/goods/attributes/list/{name}', 'Console\Attributes\AttributesCategoriesController@list');

    Route::get('/goods/attributes/categories', 'Console\Attributes\AttributesCategoriesController@index');
    Route::get('/goods/attributes/categories/add', 'Console\Attributes\AttributesCategoriesController@add');
    Route::post('/goods/attributes/categories/add', 'Console\Attributes\AttributesCategoriesController@postAdd');
    Route::get('/goods/attributes/categories/revoke/{id}', 'Console\Attributes\AttributesCategoriesController@revoke');

    // users
    Route::get('/users', 'Console\Users\UsersController@index');
    Route::get('/admins', 'Console\Users\UsersController@adminList');

    // orders
    Route::get('/orders', 'Console\Orders\OrdersController@index');

    // sliders
    Route::get('/sliders', 'Console\Settings\SlidersController@index');
    Route::get('/sliders/add', 'Console\Settings\SlidersController@add');

    // articles
    Route::get('/articles', 'Console\Articles\ArticlesController@index');
    Route::get('/articles/add', 'Console\Articles\ArticlesController@add');
});
