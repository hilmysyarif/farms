@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url(Request::path()) }}" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-md-2 control-label">{{ trans('permission.name') }}</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="{{ $row->name }}" />
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="display_name" class="col-md-2 control-label">{{ trans('permission.display_name') }}</label>
            <div class="col-md-10">
                <input id="display_name" type="text" class="form-control" name="display_name" value="{{ $row->display_name }}" />
                @if ($errors->has('display_name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('display_name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-md-2 control-label">{{ trans('permission.description') }}</label>
            <div class="col-md-10">
                <input id="description" type="text" class="form-control" name="description" value="{{ $row->description }}" />
                @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
        </div>
        @include('console.shared.form-button')
    </form>
@endsection
