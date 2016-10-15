<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>July in 2016</title>

    <!-- Fonts -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('css/lato.css') }}" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('css/bootstrap-submenu.min.css') }}" rel='stylesheet' type='text/css'>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ URL::asset('css/ie10-viewport-bug-workaround.css') }}" rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">

        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }

    </style>
    @yield('css')

</head>
<body id="app-layout">

    <div id="navigation">
        <nav class="navbar navbar-static-top navbar-july">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/">
                        July
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>

                        {!! $navHtml !!}

                        <li class="dropdown">
                            <a data-toggle="dropdown" href="#">123<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">apples</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">apple1</a></li>
                                        <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">apple2</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">apple21</a></li>
                                                <li><a href="#">apple22</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!--Used for horizontal navs-->
                        {{--<li class="dropdown-submenu">--}}
                            {{--<a tabindex="-1" href="javascript:;">一级菜单</a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="javascript:;">二级菜单</a></li>--}}
                                {{--<li><a tabindex="-1" href="javascript:;">二级菜单</a></li>--}}
                                {{--<li role="separator" class="divider"></li>--}}
                                {{--<li class="dropdown-submenu">--}}
                                    {{--<a href="javascript:;">二级菜单</a>--}}
                                    {{--<ul class="dropdown-menu">--}}
                                        {{--<li><a href="javascript:;">三级菜单</a></li>--}}
                                        {{--<li class="dropdown-submenu">--}}
                                            {{--<a href="javascript:;">三级菜单</a>--}}
                                            {{--<ul class="dropdown-menu">--}}
                                                {{--<li><a href="javascript:;">四级菜单</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>

        <canvas id="color-line"></canvas>
    </div>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <p class="text-footer">Bring you fresh life.</p>
        </div>
    </footer>

    <!-- JavaScripts -->
    {{--<script src="{{ elixir('js/app.js') }}"></script>--}}
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-submenu.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>
    <!-- color line -->
    <script>

        // For v2 [data-toggle="dropdown"] is required for [data-submenu].
        // For v2 .dropdown-submenu > [data-toggle="dropdown"] is forbidden.
        $('[data-submenu]').submenupicker();


        function renderColorLine() {
            var width = $(document.body).width();
            var height = 2;

            var cav = $('#color-line');
            cav.attr('width', width);
            cav.attr('height', height);

            var aim = cav[0];

            var ctx = aim.getContext('2d');
            var grd = ctx.createLinearGradient(0, 0, width, 0);
            grd.addColorStop(0, '#3023AE');
            grd.addColorStop(0.5, '#BDE3F5');
            grd.addColorStop(1, '#B4EC51');
            ctx.fillStyle = grd;
            ctx.fillRect(0, 0, width, height);
        }

        $(function() {
            renderColorLine();
        });


        // hover event of dropdown-submenu.
//        $('.dropdown-submenu > a').hover(function() {
//            console.log('You hover on '+$(this).text());
//        });
    </script>

    @yield('js')
</body>
</html>
