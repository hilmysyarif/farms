@extends('layouts.console_form')

@section('form')

    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>属性名称</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url('/attr/edit/'.$v->id) }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
                    <a class="btn btn-danger" href="{{ url('/attr/delete/'.$v->id) }}"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- PAGINATION
============================================================ -->
    @include('console.shared.form-pagination')
@endsection
