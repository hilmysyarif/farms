@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url('/goods/galleries/associate') }}" method="post">
        {{ csrf_field() }}

        <div id="hiddenInputs"></div>

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
                        var hiddenInputs = '';

                        files.forEach( function( file, i ) {
                            var tmp = '<p>' +
                                    '<img width="15%" class="img-thumbnail img-responsive inline" src="' + APP_URL + '/' + file.getUrl() + '">&nbsp;' +
                                    '<button type="button" class="btn btn-default btn-xs"><i class="fa fa-close">&nbsp;</i></button>' +
                                    '</p>';
                            chosenFiles += tmp;

                            hiddenInputs += '<input type="hidden" name="imgs[]" value="' + file.getUrl() + '">';
                        });
                        output.innerHTML = chosenFiles;
                        $('#hiddenInputs').html(hiddenInputs);
                    } );

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( 'gallery-output' );
                        output.innerHTML += 'Selected resized image: ' + evt.data.file.get( 'name' ) + '<br>url: ' + evt.data.resizedUrl;
                    } );
                }
            } );
        };

    </script>

@endsection
