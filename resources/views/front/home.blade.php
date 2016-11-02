@extends('layouts.app')

@section('content')
<div class="container gap-top">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ol>

    @include('front.shared.home_side')

    <div class="col-lg-10 col-sm-10">
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
