@extends('layouts.console_form')

@section('form')
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{ url('/slider/edit') }}">

            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $row['id'] }}">

            <div class="form-group">
                <label for="sort_order" class="col-md-2 control-label">@lang('common.name')</label>
                <div class="col-md-10">
                    <input class="form-control" id="name" type="text" name="name" value="{{ $row['name'] }}" />
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="sort_order" class="col-md-2 control-label">@lang('common.description')</label>
                <div class="col-md-10">
                    <input class="form-control" id="description" type="text" name="description" value="{{ $row['description'] }}" />
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="sort_order" class="col-md-2 control-label">@lang('common.url')</label>
                <div class="col-md-10">
                    <input class="form-control" id="url" type="text" name="url" value="{{ $row['url'] }}" />
                    @if ($errors->has('url'))
                        <span class="help-block">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <label for="name" class="col-md-2 control-label">@lang('sliders.image')</label>
                <div class="col-md-10">
                    <input id="img" type="hidden" name="img" value="{{ $row['img'] }}" />
                    <button type="button" class="btn btn-default" id="ckfinder-slider">
                        <i class="fa fa-image">&nbsp;</i>
                        选择图片
                    </button>
                    <div id="cover-output" class="row gap-top">
                        @if($row['img'])
                            <p>
                                <img width="15%" class="img-thumbnail img-responsive inline" src="{{ env('APP_URL') }}/{{ $row['img'] }}">&nbsp;
                            </p>
                        @endif
                    </div>
                    @if ($errors->has('img'))
                        <span class="help-block">
                            <strong>{{ $errors->first('img') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="sort_order" class="col-md-2 control-label">@lang('sliders.sort')</label>
                <div class="col-md-10">
                    <input class="form-control" id="sort_order" type="number" name="sort_order" value="{{ $row['sort_order'] }}" />
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
    <script src="{{ URL::asset('ckfinder/ckfinder.js') }}"></script>
    <script>
        var APP_URL = '{{ env('APP_URL') }}';
        var button_slider = document.getElementById( 'ckfinder-slider' );

        button_slider.onclick = function() {
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
