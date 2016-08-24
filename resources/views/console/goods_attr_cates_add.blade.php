@extends('layouts.console_form')

@section('css')
    <link href="{{ URL::asset('css/jquery.tagsinput.min.css') }}" rel="stylesheet">
@endsection

@section('form')
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{ url('/goods/attributes/categories/add') }}">
            <div class="form-group">
                <label for="name" class="col-md-2 control-label">分类名称</label>
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
                <label for="category_id" class="col-md-2 control-label">包含属性</label>
                <div class="col-md-1">
                    @include('console.shared.form-select')
                </div>
                <div class="col-md-9" id="tags">
                </div>
            </div>
            @include('console.shared.form-button')
        </form>
    </div>

@endsection

@section('js')
    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script src="{{ URL::asset('js/vue-resource.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.tagsinput.min.js') }}"></script>
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
                loadSubs: function(parent_id, parent_name) {
                    // this is the final category
                    var input = $(this.$el).children()[0];
                    $(input).val(parent_id);

                    $('#selects #name').text(parent_name);

                    // tags
//                    $('#tags').addTag(parent_name);
                    var tag = `&nbsp;<button class="btn btn-primary" type="button">
                    ` + parent_name + ` <span class="badge">3</span>
                            </button>`;
                    $('#tags').html($('#tags').html() + tag);
                }
            },
            ready() {
                var test = '{!! $selects !!}';
                console.log(test);
                var testJSON = JSON && JSON.parse(test);
                console.log(testJSON);
                this.$set('selects', testJSON);
            }
        });
    </script>
@endsection
