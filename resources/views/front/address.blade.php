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
                                    <th>{{ trans('common.operation') }}</th>
                                </tr>
                                @foreach ($list as $v)
                                    <tr @if($v->default) class="info" @endif>
                                        <td>{{ $v->receiver }}</td>
                                        <td>{{ $v->contact }}</td>
                                        <td class="detail-address">{{ $v->zone_id }} {{ $v->detail }}</td>
                                        <td>
                                            <a class="btn btn-default" href="{{ url('address/'.$v->id.'/edit') }}" title="{{ trans('common.edit') }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger" href="{{ url('address/'.$v->id.'/remove') }}" title="{{ trans('common.delete') }}">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                            <div>
                                <a class="btn btn-primary" href="{{ url('/address/add') }}">
                                    <i class="fa fa-plus"></i>
                                    {{ trans('user.add_address') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ URL::asset('js/pcd.list.js') }}"></script>
    <script>
        var res = [];

        $(function () {
            $('.detail-address').each(function (index, item) {
                var tmp = $(item).text().split(' ');
                fullAddress(tmp[0]);
                $(item).text(res.reverse().join(' ') + ' ' + tmp[1]);
                res = [];
            });
        });


        function fullAddress (id) {
            for (var i = 0; i < pcdList.length; i++) {
                if (pcdList[i].id == id) {
                    res.push(pcdList[i].name);
                    fullAddress(pcdList[i].pid);
                    break;
                }
            }
        }
    </script>
@endsection
