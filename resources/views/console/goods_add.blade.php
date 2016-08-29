@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url('/goods/add') }}" method="post">
        <div class="form-group">
            <label for="name" class="col-md-2 control-label">@lang('goods.name')</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" />
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <!-- COVER
        ===========================================-->
        <div class="form-group">
            <label for="cover_url" class="col-md-2 control-label">@lang('goods.cover')</label>
            <div class="col-md-10">
                <input id="cover_url" type="hidden" class="form-control" name="cover_url" value="{{ old('cover_url') }}" />
                <button class="btn btn-default" type="button" id="ckfinder-cover">
                    <i class="fa fa-btn fa-picture-o">&nbsp;</i>选择封面
                </button>
                <div id="cover-output" class="row">

                </div>
                @if ($errors->has('cover_url'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cover_url') }}</strong>
                    </span>
                @endif
            </div>
        </div><!--COVER-->

        <!-- CATEGORY
        ===========================================-->
        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">@lang('goods.category')</label>
            <input type="hidden" name="category_id">
            <div class="col-md-10">
                @include('console.shared.form-select')
            </div>
        </div>
        <!-- ATTRIBUTES
        ===========================================-->
        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">@lang('goods.attributes')</label>
            <div class="col-md-10">
                <div class="form-inline">
                    <div class="input-group">
                        <div class="input-group-addon">Mass:</div> <input name="goods_attr_value[]" class="form-control">
                    </div>
                </div>
                <div class="gap-top">
                    <div class="col-lg-4">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item">Morbi leo risus</a>
                            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item">Morbi leo risus</a>
                            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- GALLERY
        ===========================================-->
        <div class="form-group">
            <label for="gallery" class="col-md-2 control-label">相册</label>
            <div class="col-md-10">
                <button type="button" class="btn btn-default" id="ckfinder-modal">
                    <i class="fa fa-btn fa-picture-o">&nbsp;</i>选择图片
                </button>
                <div id="gallery-output" class="row gap-top">

                </div>
            </div>
        </div><!--COVER-->

        @include('console.shared.form-button')
    </form>
@endsection

@section('js')
    <script src="{{ URL::asset('ckfinder/ckfinder.js') }}"></script>
    <script>
        var APP_URL = '{{ env('APP_URL') }}';
        var button = document.getElementById( 'ckfinder-modal' );
        var button_cover = document.getElementById( 'ckfinder-cover' );

        button.onclick = function() {
            CKFinder.modal( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var output = document.getElementById( 'gallery-output' );
                        var files = evt.data.files;
                        var chosenFiles = '';

                        files.forEach( function( file, i ) {
                            var tmp = '<p>' +
                                    '<img width="15%" class="img-thumbnail img-responsive inline" src="' + APP_URL + '/' + file.getUrl() + '">&nbsp;' +
                                    '<button type="button" class="btn btn-default btn-xs"><i class="fa fa-close">&nbsp;</i></button>' +
                                    '</p>';
                            chosenFiles += tmp;
                        });
                        output.innerHTML = chosenFiles;
                    } );

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( 'gallery-output' );
                        output.innerHTML += 'Selected resized image: ' + evt.data.file.get( 'name' ) + '<br>url: ' + evt.data.resizedUrl;
                    } );
                }
            } );
        };

        button_cover.onclick = function() {
            CKFinder.modal( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var output = document.getElementById( 'cover-output' );
                        var files = evt.data.files;
                        var chosenFiles = '';

                        files.forEach( function( file, i ) {
                            var tmp = '<p>' +
                                    '<img width="15%" class="img-thumbnail img-responsive inline" src="' + APP_URL + '/' + file.getUrl() + '">&nbsp;' +
                                    '<button type="button" class="btn btn-default btn-xs"><i class="fa fa-close">&nbsp;</i></button>' +
                                    '</p>';
                            chosenFiles += tmp;
                        });
                        output.innerHTML = chosenFiles;
                    } );

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( 'cover-output' );
                        output.innerHTML += 'Selected resized image: ' + evt.data.file.get( 'name' ) + '<br>url: ' + evt.data.resizedUrl;
                    } );
                }
            } );
        };
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
@endsection
