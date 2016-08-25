@extends('layouts.console_form')

@section('css')
    <link href="{{ URL::asset('css/jquery.tagsinput.min.css') }}" rel="stylesheet">
@endsection

@section('form')
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{ url('/goods/attributes/categories/add') }}">

            {{ csrf_field() }}
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

            <div id="attr_ids">
                <input type="hidden" name="attr_ids[]" v-for="option in choosed" value="@{{ option.id }}">
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
        testJSON = [];
        choosedOptions = [];

        // attr_ids
        var attrids = new Vue({
            el: '#attr_ids',
            data() {
                return {
                    choosed: choosedOptions
                }
            }
        });

        // selects
        var selects = new Vue({
            el: '#selects',
            data() {
                return {
                    selects: testJSON,
                    name: '{{ $select_name }}'
                }
            },
            methods: {
                loadSubs: function(parent_id, parent_name, index) {
                    // this is the final category
                    var input = $(this.$el).children()[0];
                    $(input).val(parent_id);

                    $('#selects #name').text(parent_name);

                    // tags
                    var tag = `&nbsp;<button class="btn btn-primary" type="button">
                    ` + parent_name + ` <span class="badge" id="` + parent_id + `" title="` + parent_name + `"><i class="fa fa-close"></i> </span>
                            </button>`;
                    $('#tags').html($('#tags').html() + tag);

                    // update attr_ids.
                    choosedOptions.push(testJSON[index]);
//                    attrids.$set('choosed', choosedOptions);

                    // remove current option
                    testJSON.splice(index, 1);
                }
            },
            ready() {
                var test = '{!! $selects !!}';
                testJSON = JSON && JSON.parse(test);
                this.$set('selects', testJSON);
            }
        });

        $(function() {
            $('#tags').on('click', '.badge', function() {
                // update selects of vue.

                var id = $(this).attr('id');
                var name = $(this).attr('title');
                var object = {
                    id: id,
                    name: name
                };
                testJSON.push(object);

                // remove choosed one
                $(this).parent().remove();
                for (var i = 0; i < choosedOptions.length; i++) {
                    if (choosedOptions[i].id == id) {
                        choosedOptions.splice(i, 1);
                        break;
                    }
                }
            });
        });
    </script>
@endsection
