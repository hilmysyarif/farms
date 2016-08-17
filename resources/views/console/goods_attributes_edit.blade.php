@extends('layouts.console_form')

@section('form')
    <!-- SEARCH
============================================================ -->
    <form class="form-horizontal" method="post" action="{{ url('/goods/attributes/edit') }}">
        {{csrf_field()}}

        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">名称</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="{{ $name }}" />
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <input type="hidden" name="id" value="{{ $id }}">
        @include('console.shared.form-button')
    </form>
@endsection
