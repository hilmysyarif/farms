@extends('layouts.console_form')

@section('form')

    <div class="col-lg-12">
        <!-- SEARCH
============================================================ -->
        <form class="form-horizontal" method="post" action="{{ url('/categories/edit') }}">

            {{csrf_field()}}
            <input type="hidden" name="id" value="{{ $row->id }}">

            <div class="form-group {{ $errors->has('name')? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">@lang('common.name')</label>
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
                <label for="category_id" class="col-md-2 control-label">@lang('categories.superior')</label>

                @include('console.shared.form-select-edit')
            </div>

            <div class="form-group {{ $errors->has('sort_order') ? ' has-error' : '' }}">
                <label for="sort_order" class="col-md-2 control-label">@lang('common.sort')</label>
                <div class="col-md-10">
                    <input id="name" type="text" class="form-control" name="sort_order" value="{{ $row->sort_order }}" />
                    @if ($errors->has('sort_order'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sort_order') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            @include('console.shared.form-button')
        </form>
    </div>
@endsection


