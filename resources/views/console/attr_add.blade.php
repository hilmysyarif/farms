@extends('layouts.console_form')

@section('form')
    <!-- SEARCH
============================================================ -->
    <form class="form-horizontal" method="post" action="{{ url('/attr/add') }}">
        {{csrf_field()}}

        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">@lang('common.name')</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" />
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        <div class="form-group {{ $errors->has('suffix') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">@lang('attr.suffix')</label>
            <div class="col-md-10">
                <input id="suffix" type="text" class="form-control" name="suffix" value="{{ old('suffix') }}" />
                @if ($errors->has('suffix'))
                    <span class="help-block">
                        <strong>{{ $errors->first('suffix') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">@lang('common.type')</label>
            <div class="col-md-1">
                @include('console.shared.form-select')
            </div>
            <div class="col-md-9" id="tags">
            </div>
        </div>

        @include('console.shared.form-button')
    </form>
@endsection

@section('js')
    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script src="{{ URL::asset('js/vue-resource.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.tagsinput.min.js') }}"></script>
    <script>

        // selects
        var selects = new Vue({
            el: '#selects',
            data() {
                return {
                    selects: [],
                    name: '{{ $select_name }}',
                    value: '',
                    notice: '@lang('common.please_choose')'
                }
            },
            methods: {
                loadSubs: function(parent_id, parent_name, index) {
                    // this is the final category
                    var input = $(this.$el).children()[0];
                    $(input).val(parent_id);

                    $('#selects #name').text(parent_name);
                }
            },
            ready() {
                var test = '{!! $selects !!}';
                var testJSON = JSON && JSON.parse(test);
                this.$set('selects', testJSON);
            }
        });
    </script>
@endsection