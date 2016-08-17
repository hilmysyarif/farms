@extends('layouts.app')


@section('content')


<!-- Carousel
================================================== -->
<carousel></carousel>
<!-- /.carousel -->
    
<!-- Galleries
============================================================ -->
<recommended></recommended>

@endsection

@section('js')
    <script src="{{ URL::asset('js/front.js') }}"></script>
@endsection