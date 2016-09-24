@extends('layouts.console_form')

@section('form')

    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>图片</th>
            <th>名称</th>
            <th>地址</th>
            <th>排序</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

        @foreach($list as $lst)
            <tr>
                <td>{{ $lst['id'] }}</td>
                <td>
                    @if($lst['img'])
                        <img class="img-responsive" src="{{ $lst['img'] }}" width="10%">
                    @endif
                </td>
                <td>{{ $lst['name'] }}</td>
                <td>{{ $lst['url'] }}</td>
                <td>{{ $lst['sort_order'] }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('/slider/edit/'.$lst['id']) }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
                    <a class="btn btn-danger" href="{{ url('/slider/delete/'.$lst['id']) }}"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- PAGINATION
============================================================ -->
    @include('console.shared.form-pagination')

@endsection
