@extends('layouts.console_form')

@section('form')

    <div class="col-lg-12">
        <!-- SEARCH
============================================================ -->
        <form class="form-horizontal" method="post" action="{{ url('/categories/add') }}">

            {{csrf_field()}}

            <div class="form-group {{ $errors->has('name')? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">@lang('common.name')</label>
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
                <label for="category_id" class="col-md-2 control-label">@lang('categories.superior')</label>
                <div class="col-md-10">
                    @include('console.shared.form-select')
                </div>
            </div>

            <div class="form-group {{ $errors->has('sort_order') ? ' has-error' : '' }}">
                <label for="sort_order" class="col-md-2 control-label">@lang('common.sort')</label>
                <div class="col-md-10">
                    <input id="name" type="text" class="form-control" name="sort_order" value="{{ old('sort_order') }}" />
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

@section('js')
    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script src="{{ URL::asset('js/vue-resource.min.js') }}"></script>
    <script>
        var selects = new Vue({
            el: '#selects',
            data() {
                return {
                    selects: [
                        {
                            id: 1,
                            name: '苹果',
                            sort_order: 0
                        },
                        {
                            id: 2,
                            name: '红苹果',
                            sort_order: 1
                        }
                    ],
                    name: '{{ $select_name }}'
                }
            },
            methods: {
                loadSubs: function(parent_id, parent_name, index) {
                    this.$http.get('/categories/subs/' + parent_id).then((response) => {
                        var jsonData = response.data;
                        if (jsonData.categories.length != 0) {
                            // it means that it has children.
                            $('#selects #name').text('请继续选择');

                            // update current selects for choosing.
                            this.$set('selects', jsonData.categories);
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
@endsection

