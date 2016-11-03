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
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('common.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('common.register') }}</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-home"></i>{{ trans('user.home') }}</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('common.logout') }}</a></li>
                            </ul>
                        </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid color-line"></div>
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
{{--    <script src="{{ URL::asset('js/bootstrap-submenu.min.js') }}"></script>--}}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>
    <!-- color line -->
    <script>

        // For v2 [data-toggle="dropdown"] is required for [data-submenu].
        // For v2 .dropdown-submenu > [data-toggle="dropdown"] is forbidden.
//        $('[data-submenu]').submenupicker();

    </script>

    @yield('js')
</body>
</html>
