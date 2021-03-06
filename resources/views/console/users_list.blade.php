@extends('layouts.console_form')

@section('form')

    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>用户名</th>
            <th>邮箱</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($list as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if ($user->id != 1)
                <a href="/user/edit/{{ $user->id }}" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>{{ trans('common.edit') }}</a>
                <a href="/user/delete/{{ $user->id }}" class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>{{ trans('common.delete') }}</a>
                <a href="/user/granted/{{ $user->id }}" class="btn btn-primary"><i class="fa fa-check">&nbsp;</i>{{ trans('user.grant') }}</a>
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <!-- PAGINATION
============================================================ -->
    @include('front.shared.pages')

@endsection
