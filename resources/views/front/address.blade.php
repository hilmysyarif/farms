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
                        <div class="panel-heading">{{ trans('user.addresses') }}</div>

                        <div class="panel-body">
                            <table class="table table-bordered table-responsive">
                                <tr>
                                    <th>{{ trans('user.receiver') }}</th>
                                    <th>{{ trans('user.contact_phone') }}</th>
                                    <th>{{ trans('user.address') }}</th>
                                </tr>
                                @foreach ($list as $v)
                                    <tr>
                                        <td>{{ $v->receiver }}</td>
                                        <td>{{ $v->contact }}</td>
                                        <td>{{ $v->zone_id }} {{ $v->detail }}</td>
                                    </tr>
                                @endforeach
                            </table>

                            <div>
                                <a class="btn btn-primary" href="{{ url('/address/add') }}">
                                    <i class="fa fa-plus"></i>
                                    {{ trans('user.create_address') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
