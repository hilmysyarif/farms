@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url(Request::path()) }}" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-md-2 control-label">{{ trans('order.update_status') }}</label>
            <div class="col-md-10">
                @include('console.shared.form-select')
            </div>
        </div>

        @include('console.shared.form-button')
    </form>
@endsection

@section('js')
    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script>
        new Vue({
            el: '#selects',
            data() {
                return {
                    selects: [],
                    notice: '{{ trans('common.please_choose') }}',
                    name: 'status',
                    value: '0'
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
                var jsonData = JSON && JSON.parse('{!! json_encode($selects) !!}');
                this.selects = jsonData;
            }
        });
    </script>
@endsection
