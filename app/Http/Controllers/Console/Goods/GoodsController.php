<?php

namespace App\Http\Controllers\Console\Goods;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Article;
use App\Models\Atrcat;
use App\Models\Attr;
use App\Models\Category;
use App\Models\CatsGoods;
use App\Models\GalleryGoods;
use App\Models\Goods;
use App\Models\AttrGoods;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends ConsoleController
{
    public function __construct(){
        parent::__construct();
        $this->tabs = [
            [
                'url' => url('/goods'),
                'name' => '商品列表'
            ],
            [
                'url' => url('/goods/add'),
                'name' => '添加商品'
            ],
        ];
    }

    public function index(Goods $goods) {
        $list = $goods->fetchBlock();
        return display('console/goods_list', [
            'tabs' => $this->tabs,
            'active' => 0,
            'list' => json_encode($list)
        ]);
    }

    public function add(Article $article) {
        // Get articles for user to choose to set as detail article.
        $articles = $article->goodsArticles();
        $jsonArticles = json_encode($articles);

//        $categories = $category->fetchBlock();
        return display('console/goods_add', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => $jsonArticles,
//            'select_name' => 'category_id'
        ]);
    }


    private function orgPackage($request) {
        $items = $request->item;
        $quantities = $request->quantity;
        $package = [];

        foreach ($items as $k => $v) {
            $package[] = [
                'item' => $v,
                'quantity' => $quantities[$k]
            ];
        }
        $package = serialize($package);
        return $package;
    }

    public function postAdd(Request $request, Goods $goods) {
        $data = [
            'name' => $request->name,
            'cover_url' => $request->cover_url,
            'sort' => $request->sort,
            'article_id' => $request->article_id,
            'package' => $this->orgPackage($request),
            'default_price' => $request->default_price
        ];
        $goods->store($data);
        return redirect('/goods');
    }

    public function edit($goods_id, Goods $good, Article $article) {
        // get information of current goods.
        $row = $good->fetchOne($goods_id);

        $articles = $article->goodsArticles();

        $notice = trans('common.please_choose');
        if ($row['article_id']) {
            $info = new \stdClass();
            $info->id = $row['article_id'];

            $articleInfo = Article::fetchOne($row['article_id']);
            $info->name = $articleInfo->title;
            $notice = $articleInfo->title;

            $articles[] = $info;
        }

        $jsonArticles = json_encode($articles);

        $items = unserialize($row['package']);

        return display('console/goods_edit', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => $jsonArticles,
            'row' => $row,
            'goods_id' => $goods_id,
            'notice' => $notice,
            'items' => $items
        ]);
    }

    public function postEdit(Request $request, Goods $good) {

        $package = $this->orgPackage($request);
        $good_id = $request->goods_id;
        $data = [
            'name' => $request->name,
            'cover_url' => $request->cover_url,
            'sort' => $request->sort,
            'article_id' => $request->article_id,
            'package' => $package,
            'default_price' => $request->default_price
        ];

        $good->updateOne($good_id, $data);
        return redirect('/goods');
    }

    public function associateCategories($goods_id, Category $category) {
        // row info
        $goods = Goods::find($goods_id);
        $choosedCats = [];
        foreach($goods->categories as $cat) {
            $choosedCats[] = $cat->name;
        }

        $categories = $category->fetchBlock();

        $this->tabs[1]['url'] = 'javascript:;';
        $this->tabs[1]['name'] = '关联分类';
        return display('console/goods_categories', [
            'tabs' => $this->tabs,
            'active' => 1,
            'selects' => json_encode($categories),
            'goods_id' => $goods_id,
            'choosedCats' => $choosedCats,
            'row' => $goods
        ]);
    }

    public function associateAttributes($goods_id, Goods $good) {
        $this->tabs = [
            [
                'url' => url('/goods/attributes/associate/'.$goods_id),
                'name' => '已关联属性'
            ],
            [
                'url' => url('/goods/attrgoodsadd/'.$goods_id),
                'name' => '关联属性'
            ],
        ];
        $list = $good->fetchOneWithAttr($goods_id);

        return display('console/goods_attributes_list', [
            'tabs' => $this->tabs,
            'active' => 0,
            'goods_id' => $goods_id,
            'list' => json_encode($list)
        ]);
    }

    public function attrGoodsAdd($goods_id, Atrcat $atrcat, Attr $attr) {
        // get atrcats
        $atrcats = $atrcat->fetchAll();
        $jsonAtrcats = json_encode($atrcats);

        // get attrs
        $attrs = $attr->fetchAll();
        $jsonAttrs = json_encode($attrs);

        // get associated attrs
        $associatedAttrs = [];
        

        $this->tabs[1]['url'] = 'javascript:;';
        $this->tabs[1]['name'] = '关联属性';
        return display('console/goods_attributes_add', [
            'tabs' => $this->tabs,
            'active' => 1,
            'atrcats' => $jsonAtrcats,
            'attrs' => $jsonAttrs,
            'goods_id' => $goods_id,
            'associatedAttrs' => json_encode($associatedAttrs)
        ]);
    }


    public function postAttrGoodsAdd(Request $request, AttrGoods $goodsAttr) {
        $goods_id = $request->goods_id;
        $attrids = $request->attrids;

        $data = [];
        foreach ($attrids as $v) {
            $currentAttrInput = 'attr_id_'.$v;
            $data[] = [
                'goods_id' => $goods_id,
                'attr_id' => $v,
                'value' => $request->$currentAttrInput,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }

        $goodsAttr->storeBatch($data);

        return redirect('/goods/attributes/associate/'.$goods_id);
    }

    /**
     * fetch gallery list.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function associateGalleries($goods_id, Goods $goods) {
        $this->tabs = [
            0 => [
                'url' => url('/goods/galleries/associate/'.$goods_id),
                'name' => '相册列表'
            ],
            1 => [
                'url' => url('/goods/goodsGalleryAdd/'.$goods_id),
                'name' => '添加照片'
            ]
        ];

        $galleries = $goods->galleriesList($goods_id)->toArray();

        return display('console/goods_galleries_list', [
            'tabs' => $this->tabs,
            'active' => 0,
            'goods_id' => $goods_id,
            'list' => json_encode($galleries)
        ]);
    }

    public function asCat(Request $request, CatsGoods $catsGoods) {
        $catsGoods->store($request->goods_id, $request->category_id);
        return redirect('/goods');
    }

    public function asGall(Request $request, GalleryGoods $galleryGoods) {
        $goods_id = $request->goods_id;
        $imgs = $request->imgs;
        $data = [];
        foreach ($imgs as $img) {
            $data[] = [
                'goods_id' => $goods_id,
                'url' => $img
            ];
        }
        $galleryGoods->storeBatch($data);

        return redirect(url('/goods/galleries/associate/'.$goods_id));
    }


    public function attrGoodsEdit($id, $goods_id) {
        $row = AttrGoods::fetchOne($id);

        return display('console/goods_attributes_edit', [
            'tabs' => $this->tabs,
            'active' => 1,
            'row' => $row,
            'id' => $id,
            'goods_id' => $goods_id
        ]);
    }

    public function postAttrGoodsEdit(Request $request, AttrGoods $attrGoods) {
        $id = $request->id;
        $value = $request->value;
        $goods_id = $request->goods_id;
        $price = $request->price;
        $sale = $request->sale == 'on' ? 1 : 0;

        $attrGoods->updateOne($id, ['value' => $value, 'price' => $price, 'sale' => $sale]);

        return redirect('/goods/attributes/associate/'.$goods_id);
    }

    public function attrGoodsDelete($id, $goods_id, AttrGoods $attrGoods) {
        $attrGoods->remove($id);
        return redirect('/goods/attributes/associate/'.$goods_id);
    }

    /**
     * prepare adding galleries.
     *
     * @param $goods_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function galleriesAdd($goods_id) {
        $this->tabs = [
            0 => [
                'url' => url('/goods/galleries/associate/'.$goods_id),
                'name' => '相册列表'
            ],
            1 => [
                'url' => url('/goods/goodsGalleryAdd/'.$goods_id),
                'name' => '添加照片'
            ]
        ];
        return display('console/goods_galleries_add', [
            'tabs' => $this->tabs,
            'active' => 1,
            'goods_id' => $goods_id
        ]);
    }


    public function galleryEdit($id, $goods_id, GalleryGoods $galleryGoods) {

        $row = $galleryGoods->fetchOne($id);
        $this->tabs = [
            0 => [
                'url' => url('/goods/galleries/associate/'.$goods_id),
                'name' => '相册列表'
            ],
            1 => [
                'url' => url('/goods/goodsGalleryAdd/'.$goods_id),
                'name' => '添加照片'
            ]
        ];
        return display('console/goods_gallery_edit', [
            'tabs' => $this->tabs,
            'active' => 1,
            'goods_id' => $goods_id,
            'id' => $id,
            'row' => $row
        ]);
    }

    public function postGalleryEdit(Request $request, GalleryGoods $galleryGoods) {
        $id = $request->id;
        $goods_id = $request->goods_id;
        $url = $request->img;
        $galleryGoods->updateOne($id, $url);

        return redirect(url('/goods/galleries/associate/'.$goods_id));
    }

    public function galleryDelete($id, $goods_id, GalleryGoods $galleryGoods) {
        $galleryGoods->remove($id);
        return redirect(url('/goods/galleries/associate/'.$goods_id));
    }

    public function delete($id, Goods $goods) {
        $goods->remove($id);
        return redirect(url('/goods'));
    }
}
