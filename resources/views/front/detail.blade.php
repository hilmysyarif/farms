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
                    @foreach($row->ats as $attr)
                        <tr>
                            <td>{{ $attr['name'] }}</td>
                            <td>
                                <div class="attribute">
                                    @foreach($attr['values'] as $val)
                                        @if($attr['type'] == 'color')
                                            <button type="button" class="btn btn-default" style="background-color: {{ $val['value'] }}">123 {{ $attr['suffix'] }}</button>
                                        @elseif($attr['type'] == 'text' || $attr['type'] == 'number')
                                            <button type="button" class="btn btn-default">{{ $val['value'] }} {{ $attr['suffix'] }}</button>
                                        @endif
                                    @endforeach

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
            <!--Nav tabs-->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#description" aria-controls="description" role="tab" data-toggle="tab">{{ trans('goods.introduction') }}</a>
                </li>
                <li role="presentation">
                    <a href="#package" aria-controls="package" role="tab" data-toggle="tab">{{ trans('goods.itemsList') }}</a>
                </li>
            </ul>
            <!--container-fluid gap-top -->
            <div class="tab-content gap-top">
                <div role="tabpanel" class="tab-pane fade in active" id="description">
                    {!! $row->article->content !!}
                </div>
                <div role="tabpanel" class="tab-pane fade" id="package">
                    <table class="table table-responsive table-bordered">
                        @foreach ($itemsList as $item)
                            <tr>
                                <td>{{ $item['item'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div><!-- /.col-lg-6 -->
    </div>

@endsection