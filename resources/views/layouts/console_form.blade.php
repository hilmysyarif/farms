@extends('layouts.console')

@section('content')

    <!-- TAB
============================================================ -->
    <div class="col-lg-12 gap-bottom">
        <ul class="nav nav-tabs">

            @for($i = 0; $i < count($tabs); $i++)
                <li role="presentation" @if ($i == $active)class="active"@endif><a href="{{ $tabs[$i]['url'] }}">{{ $tabs[$i]['name'] }}</a></li>
            @endfor


        </ul>
    </div>

    <!-- LIST
============================================================ -->
    <div class="col-lg-12">
        @yield('form')
    </div>
@endsection
