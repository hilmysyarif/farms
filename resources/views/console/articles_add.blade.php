@extends('layouts.console_form')

@section('css')
    <link href="{{ URL::asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}" rel='stylesheet' type='text/css'>
@endsection


@section('form')

    <div class="col-lg-12">
        <!-- SEARCH
============================================================ -->
        <form class="form-horizontal" method="post" action="{{ url('/articles/add') }}">
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
                    <input id="author" type="text" class="form-control" name="title" value="{{ old('author') }}" />
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
                </div>
            </div>

            <div class="form-group">
                <label for="category_id" class="col-md-2 control-label">状态</label>

                <div class="col-md-10">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            发布
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">发布</a></li>
                            <li><a href="#">草稿</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="content" class="col-md-2 control-label">正文</label>
                <div class="col-md-10">
                    <textarea id="editor" name="content"></textarea>
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
@endsection
