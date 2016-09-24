<template>
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
                        <li><a href="/list">Pepper</a></li>
                        <li><a href="/list">Apple</a></li>
                        <li><a href="/list">Walnut</a></li>
                        <li><a href="/list">Persimmon</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <!--@if (Auth::guest())-->
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                        <!--@else-->
                        <!--<li class="dropdown">-->
                            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">-->
                                <!--{{ Auth::user()->name }} <span class="caret"></span>-->
                            <!--</a>-->

                            <!--<ul class="dropdown-menu" role="menu">-->
                                <!--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>-->
                            <!--</ul>-->
                        <!--</li>-->
                        <!--@endif-->
                    </ul>
                </div>
            </div>
        </nav>

        <canvas id="color-line"></canvas>
    </div>
</template>
<style lang="sass">
    @import 'resources/assets/sass/variables.scss';
    .navbar {
        margin: 0;
    }

    #color-line {
        display: block;
        width: 100%;
        height: 100%;
        margin-bottom: $gap-normal;
    }

    .navbar-july {
        border: 0;
    }
</style>
<script>

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
</script>
