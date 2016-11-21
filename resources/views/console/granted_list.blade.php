@extends('layouts.console_form')

@section('form')

    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>{{ trans('roles.display_name') }}</th>
            <th>{{ trans('roles.description') }}</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

        @if (count($granted) > 0)
            @foreach ($granted as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->display_name }}</td>
                    <td>{{ $role->description }}</td>
                    <td>
                        <a href="/user/revokegrant/{{$user_id}}/{{ $role->id }}" class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>{{ trans('common.delete') }}</a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">暂无数据</td>
            </tr>
        @endif
        </tbody>
    </table>

@endsection
