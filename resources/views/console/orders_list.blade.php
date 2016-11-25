@extends('layouts.console_form')

@section('form')

    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>编号</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($list as $lst)
            <tr>
                <td>{{ $lst->id }}</td>
                <td>{{ $lst->no }}</td>
                <td>{{ $lst->status }}</td>
                <td>
                    <a href="{{ url('/order/view/'.$lst->id) }}" class="btn btn-default"><i class="fa fa-info-circle">&nbsp;</i>{{ trans('common.detail') }}</a>
                    <a href="{{ url('/order/edit/'.$lst->id) }}" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>{{ trans('common.edit') }}</a>
                    <a href="{{ url('/order/delete/'.$lst->id) }}" class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>{{ trans('common.delete') }}</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    <!-- PAGINATION
============================================================ -->
    @include('front.shared.pages')

@endsection
