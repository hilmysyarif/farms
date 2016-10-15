@extends('layouts.app')

@section('content')
    <!-- Galleries
============================================================ -->
    <div class="container gap-top">
        @foreach($goodsList as $goods)
            <div class="col-lg-3">
                <a href="{{ url('/detail/'.$goods['id']) }}"><img class="img-circle" src="{{ $goods['cover_url'] }}" alt="Generic placeholder image" width="140" height="140"></a>
                <h2>{{ $goods['name'] }}</h2>
                <p><a class="btn btn-default" href="{{ url('/detail/'.$goods['id']) }}" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-3 -->
        @endforeach

    </div>

    <!-- PAGINATION
============================================================ -->
    <div class="container page">
        <ul class="pagination">
            <li><a href="/detail" class="fa fa-chevron-left"></a></li>
            <li><a href="/detail">1</a></li>
            <li class="active"><a href="/detail">2</a></li>
            <li class="disabled"><a href="/detail">3</a></li>
            <li><a href="/detail">4</a></li>
            <li><a href="/detail">5</a></li>
            <li><a href="/detail" class="fa fa-chevron-right"></a></li>
        </ul>
    </div>
@endsection

