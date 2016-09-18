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
    Route::post('/goods/add', 'Console\Goods\GoodsController@postAdd');
    Route::get('/goods/edit/{good_id}', 'Console\Goods\GoodsController@edit');
    Route::post('/goods/edit', 'Console\Goods\GoodsController@postEdit');

    Route::get('/goods/delete/{id}', 'Console\Goods\GoodsController@delete');

    Route::get('/goods/categories/associate/{goods_id}', 'Console\Goods\GoodsController@associateCategories');
    Route::get('/goods/attributes/associate/{goods_id}', 'Console\Goods\GoodsController@associateAttributes');

    Route::get('/goods/galleries/associate/{goods_id}', 'Console\Goods\GoodsController@associateGalleries');
    Route::get('/goods/goodsGalleryAdd/{goods_id}', 'Console\Goods\GoodsController@galleriesAdd');
    Route::post('/goods/goodsGalleryAdd', 'Console\Goods\GoodsController@postGalleriesAdd');

    Route::post('/goods/categories/associate', 'Console\Goods\GoodsController@asCat');;

    Route::post('/goods/galleries/associate', 'Console\Goods\GoodsController@asGall');
    Route::get('/goods/galleries/edit/{id}/{goods_id}', 'Console\Goods\GoodsController@galleryEdit');
    Route::post('/goods/galleries/edit', 'Console\Goods\GoodsController@postGalleryEdit');
    Route::get('/goods/galleries/delete/{id}/{goods_id}', 'Console\Goods\GoodsController@galleryDelete');

    Route::get('/goods/attrgoodsadd/{goods_id}', 'Console\Goods\GoodsController@attrGoodsAdd');
    Route::post('/goods/attrgoodsadd/', 'Console\Goods\GoodsController@postAttrGoodsAdd');

    Route::get('/goods/attrgoods/edit/{id}/{goods_id}', 'Console\Goods\GoodsController@attrGoodsEdit');
    Route::post('/goods/attrgoods/edit', 'Console\Goods\GoodsController@postAttrGoodsEdit');

    Route::get('/goods/attrgoods/delete/{id}/{goods_id}', 'Console\Goods\GoodsController@attrGoodsDelete');

    // categories
    Route::get('/categories', 'Console\Categories\CategoriesController@index');
    Route::get('/categories/subcateslist/{pid}', 'Console\Categories\CategoriesController@subCatesList');
    
    Route::get('/categories/subs/{pid}', 'Console\Categories\CategoriesController@subCategories');
    Route::get('/categories/add', 'Console\Categories\CategoriesController@add');
    Route::post('/categories/add', 'Console\Categories\CategoriesController@postAdd');
    Route::get('/categories/edit/{id}', 'Console\Categories\CategoriesController@edit');
    Route::post('/categories/edit', 'Console\Categories\CategoriesController@postEdit');
    Route::get('/categories/delete/{id}', 'Console\Categories\CategoriesController@delete');

    Route::get('/attr', 'Console\Attributes\AttrController@index');
    Route::get('/attr/add', 'Console\Attributes\AttrController@add');
    Route::post('/attr/add', 'Console\Attributes\AttrController@postAdd');
    Route::get('/attr/edit/{id}', 'Console\Attributes\AttrController@edit');
    Route::post('/attr/edit', 'Console\Attributes\AttrController@postEdit');

    Route::get('/attr/delete/{id}', 'Console\Attributes\AttrController@delete');


    Route::get('/atrcat', 'Console\Attributes\AtrcatController@index');
    Route::get('/atrcat/add', 'Console\Attributes\AtrcatController@add');
    Route::post('/atrcat/add', 'Console\Attributes\AtrcatController@postAdd');
    Route::get('/atrcat/revoke/{cid}/{attr_id}', 'Console\Attributes\AtrcatController@revoke');
    Route::get('/atrcat/delete/{id}', 'Console\Attributes\AtrcatController@delete');
    Route::get('/atrcat/sublist/{id}', 'Console\Attributes\AtrcatController@sublist');

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

    // atrcat
    Route::get('/atrcat/attributes/associate/{cid}', 'Console\Attributes\AtrcatController@asAttr');
    Route::post('/atrcat/attributes/associate', 'Console\Attributes\AtrcatController@postAsAttr');

    Route::get('/api/attrsByAtrcat/{cid}', 'Api\Goods\GoodsController@attrsByAtrcat');
});
