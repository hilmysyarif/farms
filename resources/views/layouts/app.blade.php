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
<body style="opacity: 0; transition: opacity 2s ease 0s;">

    <nav class="navbar navbar-default navbar-july">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#links" aria-expanded="false">
                    <span class="sr-only">{{ trans('toggle_navigation') }}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">July</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="links">
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
                                <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-home"></i>&nbsp;{{ trans('user.home') }}</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>&nbsp;{{ trans('common.logout') }}</a></li>
                                <li><a href="{{ url('/cart') }}"><i class="fa fa-btn fa-shopping-cart"></i>&nbsp;{{ trans('common.cart') }}</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        {{--<div class="container-fluid color-line"></div>--}}
    </nav>

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
        $(function() {
            $('body').css({
                opacity: '1'
            });
        });
    </script>

    @yield('js')
</body>
</html>
