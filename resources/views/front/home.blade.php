@extends('layouts.app')

@section('content')
<div class="container gap-top">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ol>

    <div class="col-lg-4 col-sm-4">
        <div class="row">

        </div>
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{ url('/home') }}">
                        <i class="fa fa-home"></i>
                        {{ trans('user.home') }}
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('/orders/1') }}">
                        <i class="fa fa-list-alt"></i>
                        {{ trans('user.orders') }}
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('/address/1') }}">
                        <i class="fa fa-send"></i>
                        {{ trans('user.addresses') }}
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('/comments/1') }}">
                        <i class="fa fa-comments"></i>
                        {{ trans('user.comments') }}
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('/collection/1') }}">
                        <i class="fa fa-star"></i>
                        {{ trans('user.collection') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-8 col-sm-8">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('user.dashboard') }}</div>

                    <div class="panel-body">
                        欢迎！
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
