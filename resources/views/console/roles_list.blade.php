@extends('layouts.console_form')

@section('form')

    <!-- LIST
============================================================ -->
    <table class="table table-bordered table-responsive" id="list">
        <thead>
        <tr>
            <th>#</th>
            <th>@lang('common.name')</th>
            <th>@lang('common.operation')</th>
        </tr>
        </thead>
        <tbody>
        <tr v-if="list.length > 0" v-for="lst in list">
            <td>@{{ lst.id }}</td>
            <td>@{{ lst.name }}</td>
            <td>
                <a class="btn btn-primary" href="/role/edit/@{{ lst.id }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
                <a class="btn btn-danger" href="/role/delete/@{{ lst.id }}"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
            </td>
        </tr>
        <tr v-else>
            <td colspan="3">{{ trans('common.no_data') }}</td>
        </tr>
        </tbody>
    </table>

    <!-- PAGINATION
============================================================ -->
    @include('front.shared.pages')
@endsection

@section('js')
    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script src="{{ URL::asset('js/vue-resource.min.js') }}"></script>
    <script>

        var attributes = new Vue({
            el: '#list',
            data() {
                return {
                    list: [
                    ]
                }
            },
            ready() {
                var list = '{!! json_encode($list) !!}';
                var dataJson = JSON && JSON.parse(list);
                this.$set('list', dataJson);
            }
        });
    </script>
@endsection

