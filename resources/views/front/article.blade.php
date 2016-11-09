@extends('layouts.app')

@section('content')

    <div class="container gap-top">
        <div class="row text-center">
            <h1>{{ $row->title }}</h1>
        </div>
        <div class="row">
            <div class="container-fluid article-area">
                {!! $row->content !!}
            </div>
        </div>
    </div>
@endsection

