@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url(Request::path()) }}" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-md-2 control-label">{{ trans('user.choose_role') }}</label>
            <div class="col-md-10">
                @include('console.shared.form-select')
            </div>
        </div>

        @include('console.shared.form-button')
    </form>
@endsection

@section('js')
    <script src="{{ URL::asset('js/vue.min.js') }}"></script>
    <script>
        new Vue({
            el: '#selects',
            data() {
                return {
                    selects: [],
                    notice: '{{ trans('common.please_choose') }}',
                    name: 'role_id',
                    value: '0'
                }
            },
            methods: {
                loadSubs: function(parent_id, parent_name, index) {
                    this.notice = this.selects[index]['name'];
                    this.value = this.selects[index]['id'];
                }
            },
            ready() {
                var jsonData = JSON && JSON.parse('{!! json_encode($selects) !!}');
                this.$set('selects', jsonData);
            }
        });
    </script>
@endsection
