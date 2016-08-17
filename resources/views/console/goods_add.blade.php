@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url('/goods/add') }}" method="post">
        <div class="form-group">
            <label for="name" class="col-md-2 control-label">Name</label>
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
            <label for="cover_url" class="col-md-2 control-label">Cover</label>
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
            <label for="category_id" class="col-md-2 control-label">Category</label>
            <input type="hidden" name="category_id">
            <div class="col-md-10">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Dropdown
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                @if ($errors->has('category_id'))
                    <span class="help-block">
                            <strong>{{ $errors->first('category_id') }}</strong>
                        </span>
                @endif
            </div>
        </div>
        <!-- ATTRIBUTES
        ===========================================-->
        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">Attributes</label>
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
@endsection
