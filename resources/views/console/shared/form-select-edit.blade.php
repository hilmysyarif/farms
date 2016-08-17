<input type="hidden" name="{{ $select_name }}" value="{{ $row->option_id }}">
<div class="col-md-10">
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            {{ $row->option_name }}
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="javascript:;" onclick="choose(this, 0)">@lang('common.nothing')</a></li>
            @foreach($selects as $v)
                <li><a href="javascript:;" onclick="choose(this, {{ $v->id }})">{{ $v->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>

@section('js')
    <script>
        function choose(ele, id) {
            var title = $(ele).html();
            var titleButton = $(ele).parent().parent().prev('button');
            var input = $(ele).parent().parent().parent().parent().prev('input');

            input.val(id);
            titleButton.html(title + '<span class="caret"></span>');
        }
    </script>
@endsection