@extends('layouts.console_form')

@section('form')

    <!-- LIST
============================================================ -->
<table class="table table-bordered table-responsive list">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('categories.category_name')</th>
            <th>@lang('common.sort')</th>
            <th>@lang('common.operation')</th>
        </tr>
    </thead>
    <tbody>

    @foreach($categories as $v)
    <tr>
        <td>{{ $v['id'] }}</td>
        <td class="cat_name"><a @if ($v['subcount'] > 0) href="{{ url('/categories/subcateslist/'.$v['id']) }}" @else href="javascript:;" @endif>{{ $v['name'] }}-{{ $v['subcount'] }}</a></td>
        <td>{{ $v['sort_order'] }}</td>
        <td>
            <a class="btn btn-primary" href="{{ url('/categories/edit/'.$v['id']) }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
            <a class="btn btn-danger" href="{{ url('/categories/delete/'.$v['id']) }}"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<!-- PAGINATION
============================================================ -->
@include('console.shared.form-pagination')
@endsection
