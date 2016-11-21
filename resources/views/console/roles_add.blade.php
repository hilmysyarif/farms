@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url(Request::path()) }}" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-md-2 control-label">{{ trans('roles.name') }}</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" />
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="display_name" class="col-md-2 control-label">{{ trans('roles.display_name') }}</label>
            <div class="col-md-10">
                <input id="display_name" type="text" class="form-control" name="display_name" value="{{ old('display_name') }}" />
                @if ($errors->has('display_name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('display_name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-md-2 control-label">{{ trans('roles.description') }}</label>
            <div class="col-md-10">
                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" />
                @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-md-2 control-label">{{ trans('roles.assign_permissions') }}</label>
            <div class="col-md-10">
                <div class="checkbox">
                    @foreach ($permissions as $permisssion)
                        <label>
                            <input type="checkbox" name="permissions[]" value="{{ $permisssion->id }}">{{ $permisssion->display_name }}
                        </label>
                    @endforeach
                </div>
            </div>
        </div>
        @include('console.shared.form-button')
    </form>
@endsection
