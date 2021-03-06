@extends('layouts.app')

@section('content')
    <!-- Galleries
============================================================ -->
    <div class="container gap-top">
        @include('front.shared.breadcrumbs')
        @foreach($goodsList as $goods)
            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6">
                <a href="{{ url('/detail/'.$goods['id']) }}">
                    <img class="img-responsive" src="{{ $goods['cover_url'] }}" alt="Generic placeholder image">
                </a>
                <h3>{{ $goods['name'] }}</h3>
                <p><a class="btn btn-default" href="{{ url('/detail/'.$goods['id']) }}" role="button">{{ trans('list.view_detail') }} &raquo;</a></p>
            </div>
        @endforeach
    </div>
    @include('front.shared.pages')
@endsection

