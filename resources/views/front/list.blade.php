@extends('layouts.app')

@section('content')
    <!-- Galleries
============================================================ -->
    <div class="container">
        <breadcrumb></breadcrumb>
        <!-- Three columns of text below the carousel -->
        <list></list>
    </div>

    <!-- PAGINATION
============================================================ -->
    <pagination></pagination>
@endsection

@section('js')
    <script src="{{ URL::asset('js/front-list.js') }}"></script>
@endsection
