@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url('/goods/attrgoods/edit') }}" method="post">

        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $id }}">
        <input type="hidden" name="goods_id" value="{{ $goods_id }}">
        <!-- ATTRIBUTES
        ===========================================-->
        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">@lang('goods.attributes')</label>
            <div class="col-md-10" id="attributes">
                <div class="form-inline">
                    <div class="input-group gap-right">
                        <div class="input-group-addon">{{ $row['name'] }}</div>
                        <input class="form-control" type="{{ $row['type'] }}" name="value" value="{{ $row['value'] }}">
                        <div class="input-group-addon">{{ $row['suffix'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">@lang('goods.price')</label>
            <div class="col-md-10">
                <div class="form-inline">
                    <div class="input-group gap-right">
                        <input class="form-control" type="number" name="price" value="{{ $row['price'] }}">
                        <div class="input-group-addon">$</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label"></label>
            <div class="col-md-10">
                <div class="checkbox">
                    <label>
                        @if ($row['sale'] == 1)
                            <input type="checkbox" name="sale" checked>@lang('goods.sale')
                        @else
                            <input type="checkbox" name="sale">@lang('goods.sale')
                        @endif
                    </label>
                </div>
            </div>
        </div>

        @include('console.shared.form-button')
    </form>
@endsection

