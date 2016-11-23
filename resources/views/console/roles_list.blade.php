@extends('layouts.console_form')

@section('form')

    <!-- LIST
============================================================ -->
    <table class="table table-bordered table-responsive" id="list">
        <thead>
        <tr>
            <th>#</th>
            <th>{{ trans('roles.display_name') }}</th>
            <th>{{ trans('roles.description') }}</th>
            <th>{{ trans('common.operation') }}</th>
        </tr>
        </thead>
        <tbody>
        @if (count($list) > 0)
            @foreach ($list as $lst)
                <tr>
                    <td>{{ $lst->id }}</td>
                    <td>{{ $lst->display_name }}</td>
                    <td>{{ $lst->description }}</td>
                    <td>
                        @if ($lst->id == 1)
                            @role('admin')
                            <a class="btn btn-primary" href="/role/edit/{{ $lst->id }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
                            @endrole
                        @else
                            <a class="btn btn-primary" href="/role/edit/{{ $lst->id }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
                        @endif

                        @if ($lst->id != 1)
                            <a  class="btn btn-danger" href="/role/delete/{{ $lst->id }}"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">{{ trans('common.no_data') }}</td>
            </tr>
        @endif
        </tbody>
    </table>

    <!-- PAGINATION
============================================================ -->
    @include('front.shared.pages')
@endsection

