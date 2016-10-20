@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url('/goods/edit') }}" method="post">

        {{ csrf_field() }}
        <input type="hidden" name="goods_id" value="{{ $goods_id }}">

        <div class="form-group">
            <label for="name" class="col-md-2 control-label">@lang('goods.name')</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="{{ $row['name'] }}" />
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
                <input id="cover_url" type="hidden" class="form-control" name="cover_url" value="{{ $row['cover_url'] }}" />
                <button class="btn btn-default" type="button" id="ckfinder-cover">
                    <i class="fa fa-btn fa-picture-o">&nbsp;</i>选择封面
                </button>
                <div id="cover-output" class="row gap-top">
                    <p>
                        <img width="15%" class="img-thumbnail img-responsive inline" src="{{ env('APP_URL') }}/{{ $row['cover_url'] }}">
                    </p>
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
                <input id="sort" type="number" class="form-control" name="sort" value="{{ $row['sort'] }}" />
                @if ($errors->has('sort'))
                    <span class="help-block">
                    <strong>{{ $errors->first('sort') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="detail_article" class="col-md-2 control-label">详情文章</label>
            <div class="col-md-10">
                @include('console.shared.form-select')
            </div>
        </div>

        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">包装信息</label>
            <div class="col-md-10">
                @include('console.shared.form-items')
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
    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script src="{{ URL::asset('js/vue-resource.min.js') }}"></script>
    <script>
        var selects = new Vue({
            el: '#selects',
            data: function () {
                return {
                    selects: [
                    ],
                    notice: '{{ $notice }}',
                    name: 'article_id',
                    value: '{{ $row['article_id'] }}'
                }
            },
            methods: {
                loadSubs: function (parent_id, parent_name, index) {
                    var input = $(this.$el).children()[0];
                    $(input).val(parent_id);
                    $('#selects #name').text(parent_name);
                }
            },
            ready: function () {
                var jsonData = JSON && JSON.parse('{!! $selects !!}');
                this.$set('selects', jsonData);
            }
        });
    </script>

@endsection
