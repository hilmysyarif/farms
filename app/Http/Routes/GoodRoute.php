<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class GoodRoute
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            $router->get('/goods', 'Console\Goods\GoodsController@index');
            $router->get('/goods/add', 'Console\Goods\GoodsController@add');
            $router->post('/goods/add', 'Console\Goods\GoodsController@postAdd');
            $router->get('/goods/edit/{good_id}', 'Console\Goods\GoodsController@edit');
            $router->post('/goods/edit', 'Console\Goods\GoodsController@postEdit');

            $router->get('/goods/delete/{id}', 'Console\Goods\GoodsController@delete');

            $router->get('/goods/categories/associate/{goods_id}', 'Console\Goods\GoodsController@associateCategories');
            $router->get('/goods/attributes/associate/{goods_id}', 'Console\Goods\GoodsController@associateAttributes');

            $router->get('/goods/galleries/associate/{goods_id}', 'Console\Goods\GoodsController@associateGalleries');
            $router->get('/goods/goodsGalleryAdd/{goods_id}', 'Console\Goods\GoodsController@galleriesAdd');
            $router->post('/goods/goodsGalleryAdd', 'Console\Goods\GoodsController@postGalleriesAdd');

            $router->post('/goods/categories/associate', 'Console\Goods\GoodsController@asCat');;

            $router->post('/goods/galleries/associate', 'Console\Goods\GoodsController@asGall');
            $router->get('/goods/galleries/edit/{id}/{goods_id}', 'Console\Goods\GoodsController@galleryEdit');
            $router->post('/goods/galleries/edit', 'Console\Goods\GoodsController@postGalleryEdit');
            $router->get('/goods/galleries/delete/{id}/{goods_id}', 'Console\Goods\GoodsController@galleryDelete');

            $router->get('/goods/attrgoodsadd/{goods_id}', 'Console\Goods\GoodsController@attrGoodsAdd');
            $router->post('/goods/attrgoodsadd/', 'Console\Goods\GoodsController@postAttrGoodsAdd');

            $router->get('/goods/attrgoods/edit/{id}/{goods_id}', 'Console\Goods\GoodsController@attrGoodsEdit');
            $router->post('/goods/attrgoods/edit', 'Console\Goods\GoodsController@postAttrGoodsEdit');

            $router->get('/goods/attrgoods/delete/{id}/{goods_id}', 'Console\Goods\GoodsController@attrGoodsDelete');
        });
    }
}