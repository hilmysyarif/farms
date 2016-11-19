@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url(Request::path()) }}" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-md-2 control-label">{{ trans('roles.display_name') }}</label>
            <div class="col-md-10">
                @foreach ($row->roles as $role)
                    {{ $role->display_name }}
                @endforeach
            </div>
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
                    selects: [

                    ],
                    notice: '@lang('common.please_choose')',
                    name: 'category_id',
                    value: '0'
                }
            },
            ready() {
                var jsonData = JSON && JSON.parse('{!! json_encode($selects) !!}');
                this.$set('selects', jsonData);
            }
        });
    </script>
@endsection