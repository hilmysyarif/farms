@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url('/goods/add') }}" method="post">

        {{ csrf_field() }}

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
                <button class="btn btn-default" id="ckfinder-cover">
                    <i class="fa fa-btn fa-picture-o">&nbsp;</i>选择封面
                </button>
                <div id="cover-output" class="row gap-top">

                </div>
                @if ($errors->has('cover_url'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cover_url') }}</strong>
                    </span>
                @endif
            </div>
        </div><!--COVER-->

        <div class="form-group">
            <label for="name" class="col-md-2 control-label">@lang('common.sort')</label>
            <div class="col-md-10">
                <input id="sort" type="number" class="form-control" name="sort" value="{{ old('sort') }}" />
                @if ($errors->has('sort'))
                    <span class="help-block">
                    <strong>{{ $errors->first('sort') }}</strong>
                </span>
                @endif
            </div>
        </div>

        @include('console.shared.form-button')
    </form>
@endsection

@section('js')
    <script src="{{ URL::asset('ckfinder/ckfinder.js') }}"></script>
    <script>
        var APP_URL = '{{ env('APP_URL') }}';
        var button_cover = document.getElementById( 'ckfinder-cover' );

        button_cover.onclick = function() {
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
                        $('#cover_url').val(imgUrl);
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
