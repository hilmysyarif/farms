@extends('layouts.app')


@section('content')
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">

        @foreach($sliders as $k => $slider)
            @if ($k == 0)
                <li data-target="#myCarousel" data-slide-to="{{ $k }}" class="active"></li>
            @else
                <li data-target="#myCarousel" data-slide-to="{{ $k }}"></li>
            @endif
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">

        @foreach($sliders as $k => $slider)
            @if ($k == 0)
                <div class="item active">
                    <img class="first-slide" src="{{ $slider->img }}" alt="{{ $slider->description }}">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2>{{ $slider->name }}</h2>
                            <p>{{ $slider->description }}</p>
                            <p><a class="btn btn-primary" href="#" role="button">查看</a></p>
                        </div>
                    </div>
                </div>
            @else
                <div class="item">
                    <img class="first-slide" src="{{ $slider->img }}" alt="{{ $slider->description }}">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2>{{ $slider->name }}</h2>
                            <p>{{ $slider->description }}</p>
                            <p><a class="btn btn-primary" href="#" role="button">查看</a></p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- /.carousel -->
    
<!-- Galleries
============================================================ -->
<div class="container articles-recommended">
    <!-- Three columns of text below the carousel -->
    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                <a href="{{ url('/article/'.$article->id) }}"><img class="img-responsive" src="{{ $article->icon }}" alt="Generic placeholder image" width="140" height="140"></a>
                <h3>{{ $article->title }}</h3>
                <div class="container-fluid article-area gap-bottom">
                    {!! $article->content !!}
                </div>
            </div><!-- /.col-lg-3 -->
        @endforeach
    </div><!-- /.row -->
</div>

@endsection
