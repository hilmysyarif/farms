
<div id="selects">
    <input type="hidden" name="@{{ name }}" value="">
    <div class="col-md-10">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span id="name">@lang('common.please_choose')</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li v-for="option in selects">
                    <a href="javascript:;" v-on:click="loadSubs(option.id, option.name)">@{{ option.name }}</a>
                </li>
            </ul>
        </div>
    </div>
</div>


{{--@section('js')--}}
    {{--<script>--}}
        {{--function choose(ele, id) {--}}
            {{--var title = $(ele).html();--}}
            {{--var titleButton = $(ele).parent().parent().prev('button');--}}
            {{--var input = $(ele).parent().parent().parent().parent().prev('input');--}}

            {{--input.val(id);--}}
            {{--titleButton.html(title + '<span class="caret"></span>');--}}
        {{--}--}}
    {{--</script>--}}
{{--@endsection--}}