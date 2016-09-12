@extends('layouts.console_form')

@section('form')
    <!-- LIST
============================================================ -->
    <table class="table table-bordered table-responsive" id="list">
        <thead>
        <tr>
            <th>#</th>
            <th>@lang('attr.name')</th>
            <th>@lang('attr.suffix')</th>
            <th>@lang('attr.value')</th>
            <th>@lang('common.operation')</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="lst in list">
            <td>@{{ lst.id }}</td>
            <td>@{{ lst.attr_name }}</td>
            <td>@{{ lst.suffix }}</td>
            <td>@{{ lst.value }}</td>
            <td>
                <a class="btn btn-primary" href="/goods/attrgoods/edit/@{{ lst.id }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
                <a class="btn btn-danger" href="/goods/attrgoods/delete/@{{ lst.id }}"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
            </td>
        </tr>
        </tbody>
    </table>

    <!-- PAGINATION
============================================================ -->
    @include('console.shared.form-pagination')
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
                var tmp = '{!! $list !!}';
                var dataJson = JSON && JSON.parse(tmp);
                if (dataJson.length > 0)
                    this.$set('list', dataJson);
            }
        });
    </script>
@endsection

