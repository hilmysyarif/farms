<?php
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class GoodRoute {

    public function map(Registrar $router) {
        $router->group(['middleware' => 'auth'], function ($router) {
            $router->get('/goods/{id?}', ['middleware' => 'permission:view_goods', 'uses' => 'Console\Goods\GoodsController@index'])
                ->where('id', '\d+');
            $router->get('/goods/add', ['middleware' => 'permission:create_goods', 'uses' => 'Console\Goods\GoodsController@add']);
            $router->post('/goods/add', ['middleware' => 'permission:create_goods', 'uses' => 'Console\Goods\GoodsController@postAdd']);
            $router->get('/goods/edit/{good_id}', ['middleware' => 'permission:view_goods_detail', 'uses' => 'Console\Goods\GoodsController@edit']);
            $router->post('/goods/edit', ['middleware' => 'permission:view_goods_detail', 'uses' => 'Console\Goods\GoodsController@postEdit']);

            $router->get('/goods/delete/{id}', ['middleware' => 'permission:delete_goods', 'uses' => 'Console\Goods\GoodsController@delete']);

            $router->get('/goods/categories/associate/{goods_id}', ['middleware' => 'permission:assign_category_to_goods', 'uses' => 'Console\Goods\GoodsController@associateCategories']);
            $router->get('/goods/attributes/associate/{goods_id}', ['middleware' => 'permission:assign_attribute_to_goods', 'uses' => 'Console\Goods\GoodsController@associateAttributes']);

            $router->get('/goods/galleries/associate/{goods_id}', ['middleware' => 'permission:manage_goods_gallery', 'uses' => 'Console\Goods\GoodsController@associateGalleries']);
            $router->get('/goods/goodsGalleryAdd/{goods_id}', ['middleware' => 'permission:manage_goods_gallery', 'uses' => 'Console\Goods\GoodsController@galleriesAdd']);
            $router->post('/goods/goodsGalleryAdd', ['middleware' => 'permission:manage_goods_gallery', 'uses' => 'Console\Goods\GoodsController@postGalleriesAdd']);

            $router->post('/goods/categories/associate', ['middleware' => 'permission:assign_category_to_goods', 'uses' => 'Console\Goods\GoodsController@asCat']);;

            $router->post('/goods/galleries/associate', ['middleware' => 'permission:manage_goods_gallery', 'uses' => 'Console\Goods\GoodsController@asGall']);
            $router->get('/goods/galleries/edit/{id}/{goods_id}', ['middleware' => 'permission:manage_goods_gallery', 'uses' => 'Console\Goods\GoodsController@galleryEdit']);
            $router->post('/goods/galleries/edit', ['middleware' => 'permission:manage_goods_gallery', 'uses' => 'Console\Goods\GoodsController@postGalleryEdit']);
            $router->get('/goods/galleries/delete/{id}/{goods_id}', ['middleware' => 'permission:manage_goods_gallery', 'uses' => 'Console\Goods\GoodsController@galleryDelete']);

            $router->get('/goods/attrgoodsadd/{goods_id}', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Goods\GoodsController@attrGoodsAdd']);
            $router->post('/goods/attrgoodsadd/', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Goods\GoodsController@postAttrGoodsAdd']);

            $router->get('/goods/attrgoods/edit/{id}/{goods_id}', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Goods\GoodsController@attrGoodsEdit']);
            $router->post('/goods/attrgoods/edit', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Goods\GoodsController@postAttrGoodsEdit']);

            $router->get('/goods/attrgoods/delete/{id}/{goods_id}', ['middleware' => 'permission:manage_goods_attributes', 'uses' => 'Console\Goods\GoodsController@attrGoodsDelete']);
        });
    }
}