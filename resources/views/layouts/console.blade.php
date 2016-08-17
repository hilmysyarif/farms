<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('css/lato.css') }}" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ URL::asset('css/ie10-viewport-bug-workaround.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('css/dashboard.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">July in 2016</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar" id="goods">
                <li>
                    <a data-toggle="collapse" data-parent="#goods" href="#goods-manager">
                        {{--@if ($current_nav == 'goods')--}}
                        {{--<i class="fa fa-caret-down">&nbsp;</i>--}}
                        {{--@else--}}
                        {{--<i class="fa fa-caret-right">&nbsp;</i>--}}
                        {{--@endif--}}
                        <i class="fa fa-caret-right">&nbsp;</i>
                        商品管理
                    </a>
                </li>
                <li>
                    <ul id="goods-manager" @if($current_nav == 'goods') class="nav collapse in" @else class="collapse nav" @endif>
                        <li @if($uri == '/goods')class="active"@endif><a href="{{ url('/goods') }}">商品列表</a></li>
                        <li @if($uri == '/goods/attributes')class="active"@endif><a href="{{ url('/goods/attributes') }}">商品属性</a></li>
                        <li @if($uri == '/goods/attributes/categories')class="active"@endif><a href="{{ url('/goods/attributes/categories') }}">商品属性分类</a></li>
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
                    <ul id="categories-manager" @if($current_nav == 'categories') class="nav collapse in" @else class="collapse nav" @endif>
                        <li @if($uri == '/categories')class="active"@endif><a href="{{ url('/categories') }}">分类列表</a></li>
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
                    <ul id="users-manager" @if($current_nav == 'users') class="nav collapse in" @else class="collapse nav" @endif>
                        <li @if($uri == '/users')class="active"@endif><a href="{{ url('/users') }}">用户列表</a></li>
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
                    <ul id="orders-manager" @if($current_nav == 'orders') class="nav collapse in" @else class="collapse nav" @endif>
                        <li @if($uri == '/orders')class="active"@endif><a href="{{ url('/orders') }}">订单列表</a></li>
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
                    <ul id="articles-manager" @if($current_nav == 'articles') class="nav collapse in" @else class="collapse nav" @endif>
                        <li @if($uri == '/articles')class="active"@endif><a href="{{ url('/articles') }}">文章列表</a></li>
                        <li @if($uri == '/articles/add')class="active"@endif><a href="{{ url('/articles/add') }}">添加文章</a></li>
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
                    <ul id="settings-manager" @if($current_nav == 'sliders') class="nav collapse in" @else class="collapse nav" @endif>
                        <li @if($uri == '/sliders')class="active"@endif><a href="{{ url('/sliders') }}">幻灯片</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @yield('content')
        </div>
    </div>
</div>

<!-- JavaScripts -->
{{--<script src="{{ elixir('js/app.js') }}"></script>--}}
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>
@yield('js')
</body>
</html>
