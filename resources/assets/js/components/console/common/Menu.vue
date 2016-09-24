<template>
    <div class="col-sm-3 col-md-2 sidebar">
        <!--<div id="tree"></div>-->

        <ul class="nav nav-sidebar" id="goods">
            <li>
                <a data-toggle="collapse" data-parent="#goods" href="#goods-manager">
                    <i class="fa fa-caret-right">&nbsp;</i>
                    商品管理
                </a>
            </li>
            <li>
                <ul id="goods-manager" class="collapse">
                    <li class="active"><a href="/goods">商品列表</a></li>
                    <li><a href="/goods/attributes">商品属性</a></li>
                    <li><a href="/goods/attributes/categories">商品属性分类</a></li>
                </ul>
            </li>

        </ul>
        <ul class="nav nav-sidebar" id="categories">
            <li>
                <a data-toggle="collapse" data-parent="#categories" href="#categories-manager">
                    <i class="fa fa-caret-right">&nbsp;</i>
                    分类管理
                </a>
            </li>
            <li>
                <ul id="categories-manager" class="collapse">
                    <li><a v-link="{ path: '/categories/list' }">分类列表</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav nav-sidebar" id="users">
            <li>
                <a data-toggle="collapse" data-parent="#users" href="#users-manager">
                    <i class="fa fa-caret-right">&nbsp;</i>
                    用户管理
                </a>
            </li>
            <li>
                <ul id="users-manager" class="collapse">
                    <li><a href="/users">用户列表</a></li>
                </ul>
            </li>

        </ul>
        <ul class="nav nav-sidebar" id="orders">
            <li>
                <a data-toggle="collapse" data-parent="#orders" href="#orders-manager">
                    <i class="fa fa-caret-right">&nbsp;</i>
                    订单管理
                </a>
            </li>
            <li>
                <ul id="orders-manager" class="collapse">
                    <li><a href="/orders">订单列表</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav nav-sidebar" id="articles">
            <li>
                <a data-toggle="collapse" data-parent="#articles" href="#articles-manager">
                    <i class="fa fa-caret-right">&nbsp;</i>
                    文章管理
                </a>
            </li>
            <li>
                <ul id="articles-manager" class="collapse">
                    <li><a href="/articles">文章列表</a></li>
                    <li><a href="/articles/add">添加文章</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav nav-sidebar" id="settings">
            <li>
                <a data-toggle="collapse" data-parent="#settings" href="#settings-manager">
                    <i class="fa fa-caret-right">&nbsp;</i>
                    设置
                </a>
            </li>
            <li>
                <ul id="settings-manager" class="collapse">
                    <li><a href="/sliders">幻灯片</a></li>
                </ul>
            </li>
        </ul>
    </div>
</template>


<style lang="sass">
    /*@import 'css/bootstrap-treeview.css';*/
    .sidebar {
        ul {
            padding: 0;
        }
    }

    .nav-sidebar {
        margin-bottom: 0;
        li {
            position: relative;
            list-style: outside none none;
            display: block;

            a {
                padding: 10px 20px;
                display: block;
                position: relative;
            }

            ul {
                a {
                    text-indent: 2em;
                }
            }
        }
        .active {
            a {
                background-color: #428bca;
                color: #fff;
            }
            a:hover {
                background-color: #428bca;
                color: #fff;
            }
            a:focus {
                background-color: #428bca;
                color: #fff;
            }
        }

        ul {
            padding: 0;
        }
    }

    .nav-sidebar {
        a {
            &:focus, &:hover {
                text-decoration: none;
            }
        }
    }
</style>

<!--<script>-->

    <!--require('../../../../../../public/js/bootstrap-treeview.js');-->
    <!--var treeData = [-->
        <!--{-->
            <!--text: '商品管理',-->
            <!--nodes: [-->
                <!--{-->
                    <!--text: '商品列表',-->
                    <!--href: '#!/categories/list'-->
                <!--},-->
                <!--{-->
                    <!--text: '商品属性',-->
                    <!--href: '/attributes'-->
                <!--},-->
                <!--{-->
                    <!--text: '商品属性分类',-->
                    <!--href: '/attributes/categories'-->
                <!--}-->
            <!--]-->
        <!--}-->
    <!--];-->

    <!--$(function() {-->
        <!--$('#tree').treeview({-->
            <!--// This makes the node's default expanded state is false.-->
            <!--levels: 1,-->
            <!--showIcon: false,-->
            <!--enableLinks: true,-->
            <!--data: treeData-->
        <!--});-->
        <!--console.log('tree has been rendered');-->
    <!--});-->

<!--</script>-->