@extends('layouts.console_form')

@section('css')
    <link href="{{ URL::asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}" rel='stylesheet' type='text/css'>
@endsection


@section('form')

    <div class="col-lg-12">
        <!-- SEARCH
============================================================ -->
        <form class="form-horizontal" method="post" action="{{ url('/articles/add') }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name" class="col-md-2 control-label">标题</label>
                <div class="col-md-10">
                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" />
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-2 control-label">作者</label>
                <div class="col-md-10">
                    <input id="author" type="text" class="form-control" name="author" value="{{ old('author') }}" />
                    @if ($errors->has('author'))
                        <span class="help-block">
                            <strong>{{ $errors->first('author') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="category_id" class="col-md-2 control-label">所属分类</label>

                <div class="col-md-10">
                    @include('console.shared.form-select')
                </div>
            </div>

            <div class="form-group">
                <label for="category_id" class="col-md-2 control-label">状态</label>

                <div class="col-md-10">
                    <div id="status">
                        <input type="hidden" name="@{{ name }}" value="@{{ value }}">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span id="name">@{{ notice }}</span>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li v-for="option in selects">
                                    <a href="javascript:;" v-on:click="choose(option.id, option.name)">@{{ option.name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="content" class="col-md-2 control-label">正文</label>
                <div class="col-md-10">
                    <textarea id="editor" name="body"></textarea>
                </div>
            </div>

            @include('console.shared.form-button')
        </form>
    </div>
@endsection


@section('js')
    <script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('ckeditor/samples/js/sample.js') }}"></script>
    <script src="{{ URL::asset('ckfinder/ckfinder.js') }}"></script>
    <script type="text/javascript">
        CKFinder.setupCKEditor();
    </script>
    <script type="text/javascript">
        initSample();
    </script>


    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script src="{{ URL::asset('js/vue-resource.min.js') }}"></script>
    <script>
        var selects = new Vue({
            el: '#selects',
            data() {
                return {
                    selects: [

                    ],
                    notice: '@lang('common.please_choose')',
                    name: 'category_id',
                    value: '0'
                }
            },
            methods: {
                loadSubs: function(parent_id, parent_name, index) {
                    this.$http.get('/categories/subs/' + parent_id).then((response) => {
                        var jsonData = JSON && JSON.parse(response.data);

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

        var status = new Vue({
            el: '#status',
            data() {
                return {
                    selects: [

                    ],
                    notice: '@lang('common.please_choose')',
                    name: 'status',
                    value: '0'
                }
            },
            methods: {
                choose: function(parent_id, parent_name) {
                    console.log(this.$el);
                    // this is the final category
                    var input = $(this.$el).children()[0];
                    $(input).val(parent_id);

                    $('#status #name').text(parent_name);
                }
            },
            ready() {
                var jsonData = JSON && JSON.parse('{!! $options !!}');
                this.$set('selects', jsonData);
            }
        });
    </script>
@endsection
