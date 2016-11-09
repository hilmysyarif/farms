@extends('layouts.console_form')

@section('css')
    <link href="{{ URL::asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}" rel='stylesheet' type='text/css'>
@endsection


@section('form')

    <div class="col-lg-12">
        <!-- SEARCH
============================================================ -->
        <form class="form-horizontal" method="post" action="{{ url('/articles/edit') }}">

            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $row->id }}">

            <div class="form-group">
                <label for="name" class="col-md-2 control-label">标题</label>
                <div class="col-md-10">
                    <input id="title" type="text" class="form-control" name="title" value="{{ $row->title }}" />
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
                    <input id="author" type="text" class="form-control" name="author" value="{{ $row->author }}" />
                    @if ($errors->has('author'))
                        <span class="help-block">
                            <strong>{{ $errors->first('author') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-2 control-label">@lang('articles.icon')</label>
                <div class="col-md-10">
                    <input id="img" type="hidden" name="icon" value="{{ $row->icon }}" />
                    <button type="button" class="btn btn-default" id="ckfinder-icon">
                        <i class="fa fa-image">&nbsp;</i>
                        选择图片
                    </button>
                    <div id="cover-output" class="row gap-top">
                        @if($row['icon'])
                            <p>
                                <img width="15%" class="img-thumbnail img-responsive inline" src="{{ env('APP_URL') }}/{{ $row->icon }}">&nbsp;
                            </p>
                        @endif
                    </div>
                    @if ($errors->has('icon'))
                        <span class="help-block">
                            <strong>{{ $errors->first('icon') }}</strong>
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
                                <span id="name">
                                    @if ($row->status == 0)
                                        草稿
                                        @else
                                        发布
                                    @endif
                                </span>
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
                    <textarea id="editor" name="body">
                        {{ $row->content }}
                    </textarea>
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
                    notice: '{{ $row->category->name }}',
                    name: 'category_id',
                    value: '{{ $row->category_id }}'
                }
            },
            methods: {
                loadSubs: function(parent_id, parent_name, index) {
                    this.$http.get('/categories/subs/' + parent_id).then(function (response) {
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
                    }, function (response) {
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
                    value: '{{ $row['status'] }}'
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

    <script>
        var APP_URL = '{{ env('APP_URL') }}';
        var button_icon = document.getElementById( 'ckfinder-icon' );

        button_icon.onclick = function() {
            CKFinder.modal( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var output = document.getElementById( 'cover-output' );
                        var files = evt.data.files;

                        var chosenFiles = '<p>' +
                                '<img width="15%" class="img-thumbnail img-responsive inline" src="' + APP_URL + '/' + files.first().getUrl() + '">&nbsp;' +
                                '</p>';
                        output.innerHTML = chosenFiles;

                        // update hidden filed of cover_url
                        var imgUrl = files.first().getUrl();
                        $('#img').val(imgUrl);
                    } );

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( 'cover-output' );
                        output.innerHTML += 'Selected resized image: ' + evt.data.file.get( 'name' ) + '<br>url: ' + evt.data.resizedUrl;
                    } );
                }
            } );
        };
    </script>
@endsection