@extends('layouts.app')

@section('content')

    <div class="container order gap-top">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol>
        <div class="container-fluid">
            {{ trans('cashier.you_need_pay') }} {{ $amount }}，
            <button class="btn btn-primary">
                <i class="fa fa-cashier"></i>
                {{ trans('cashier.go_to_pay') }}
            </button>
        </div>
    </div>

@endsection
