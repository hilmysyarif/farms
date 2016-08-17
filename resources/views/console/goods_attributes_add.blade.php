@extends('layouts.console_form')

@section('form')
    <!-- SEARCH
============================================================ -->
    <form class="form-horizontal" method="post" action="{{ url('/goods/attributes/add') }}">
        {{csrf_field()}}

        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">名称</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" />
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        @include('console.shared.form-button')
    </form>
@endsection
