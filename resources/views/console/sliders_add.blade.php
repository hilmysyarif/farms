@extends('layouts.console_form')

@section('form')
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{ url('/sliders/add') }}">
            <div class="form-group">
                <label for="name" class="col-md-2 control-label">图片</label>
                <div class="col-md-10">
                    <input id="content" type="hidden" name="content" value="{{ old('content') }}" />
                    <button class="btn btn-default">
                        <i class="fa fa-image">&nbsp;</i>
                        选择图片
                    </button>
                    @if ($errors->has('content'))
                        <span class="help-block">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="sort_order" class="col-md-2 control-label">排序</label>
                <div class="col-md-10">
                    <input id="sort_order" type="number" name="sort_order" value="{{ old('sort_order') }}" />
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
