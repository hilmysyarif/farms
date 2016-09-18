@extends('layouts.console_form')

@section('form')

    <!-- LIST
============================================================ -->
    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>标题</th>
            <th>作者</th>
            <th>分类</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

        @foreach($list as $lst)
            <tr>
                <td>{{ $lst['id'] }}</td>
                <td>{{ $lst['title'] }}</td>
                <td>{{ $lst['author'] }}</td>
                <td>{{ $lst['category_name'] }}</td>
                <td>
                    <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
                    <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- PAGINATION
============================================================ -->
    @include('console.shared.form-pagination')
@endsection
