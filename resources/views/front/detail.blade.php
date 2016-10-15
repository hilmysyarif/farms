@extends('layouts.app')

@section('content')
    <div class="container detail gap-top">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol>
        <div class="col-lg-6">
            <img class="img-responsive" src="{{ $row->cover_url }}" alt="Generic placeholder image" width="300" height="300">
            <ul class="gallery">
                <li><a href="#" class="fa fa-chevron-left"></a> </li>
                @foreach($row->galleries as $gallery)
                    <li>
                        <img class="img-thumbnail img-responsive" src="{{ $gallery->url }}" alt="Generic placeholder image" width="100" height="100">
                    </li>
                @endforeach
                <li><a href="#" class="fa fa-chevron-right"></a> </li>
            </ul>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <h1>{{ $row->name }}</h1>
            <form action="/cart" method="get">
                <table class="table">
                    @foreach($row->attrgoods as $attrgood)
                        <tr>
                            <td>{{ $attrgood->attr->name }}</td>
                            <td>
                                <div class="attribute">
                                    <button type="button" class="btn btn-default">{{ $attrgood->value }}</button>
                                    <button type="button" class="btn btn-default">500G</button>
                                    <button type="button" class="btn btn-primary">1000G</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>Price</td>
                        <td>$43.25</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-btn fa-cart-plus">&nbsp;&nbsp;</i>Add to cart
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-12 gap-top">
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="#">Description</a></li>
                <li role="presentation" class="active"><a href="#">Package</a></li>
            </ul>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-12 gap-top">
            <table class="table table-responsive table-bordered">
                <tr>
                    <td>Color</td>
                    <td>light blue</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>1000g</td>
                </tr>
                <tr>
                    <td>Producing area</td>
                    <td>Xi'an</td>
                </tr>
            </table>
        </div>
    </div>

@endsection
