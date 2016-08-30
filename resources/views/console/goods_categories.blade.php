@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url('/goods/categories/associate') }}" method="post">

        {{ csrf_field() }}
        <!-- CATEGORY
        ===========================================-->
        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">@lang('goods.category')</label>
            <input type="hidden" name="category_id">
            <div class="col-md-10">
                @if (count($choosedCats) > 0)
                    @foreach($choosedCats as $cat)
                        <a href="javascript:;" class="btn btn-default">{{ $cat }}</a>
                    @endforeach
                @else
                    @include('console.shared.form-select')
                @endif
            </div>
        </div>
        <input type="hidden" name="goods_id" value="{{ $goods_id }}">

        @if (count($choosedCats) > 0)

        @else
            @include('console.shared.form-button')
        @endif

    </form>
@endsection

@section('js')
    @if (count($choosedCats) > 0)
    @else
        <script src="{{ URL::asset('js/vue.js') }}"></script>
        <script src="{{ URL::asset('js/vue-resource.min.js') }}"></script>
        <script>
            var selects = new Vue({
                el: '#selects',
                data() {
                    return {
                        selects: [
                        ],
                        name: '{{ $select_name }}'
                    }
                },
                methods: {
                    loadSubs: function(parent_id, parent_name, index) {
                        this.$http.get('/categories/subs/' + parent_id).then((response) => {
                            var data = response.data;
                        var dataJson = JSON && JSON.parse(data);

                        if (dataJson.categories.length != 0) {
                            // it means that it has children.
                            $('#selects #name').text('请继续选择');

                            // update current selects for choosing.
                            this.$set('selects', dataJson.categories);
                        } else {
                            // this is the final category
                            var input = $(this.$el).children()[0];
                            $(input).val(parent_id);

                            $('#selects #name').text(parent_name);
                        }
                    }, (response) => {
                            console.error(response);
                        });
                    }
                },
                ready() {
                    var jsonData = JSON && JSON.parse('{!! $selects !!}');
                    this.$set('selects', jsonData);
                }
            });

        </script>
    @endif

@endsection
