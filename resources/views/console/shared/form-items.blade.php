<div class="form-inline">
    <button type="button" class="btn btn-default add-item">
        增加物件
        <i class="fa fa-plus"></i>
    </button>
</div>
<div class="items">
    @if (isset($items) && $items)
        @foreach ($items as $item)
            <div class="form-inline item-group">
                <div class="input-group">
                    <div class="input-group-addon">物件</div>
                    <input class="form-control" type="text" name="item[]" value="{{ $item['item'] }}">
                </div>
                <div class="input-group">
                    <div class="input-group-addon">数量</div>
                    <input class="form-control" type="text" name="quantity[]" value="{{ $item['quantity'] }}">
                </div>
                <button type="button" class="btn btn-default">
                    <i class="fa fa-remove"></i>
                </button>
            </div>
        @endforeach
    @else
        <div class="form-inline item-group">
            <div class="input-group">
                <div class="input-group-addon">物件</div>
                <input class="form-control" type="text" name="item[]" value="">
            </div>
            <div class="input-group">
                <div class="input-group-addon">数量</div>
                <input class="form-control" type="text" name="quantity[]" value="">
            </div>
            <button type="button" class="btn btn-default">
                <i class="fa fa-remove"></i>
            </button>
        </div>
    @endif

</div>