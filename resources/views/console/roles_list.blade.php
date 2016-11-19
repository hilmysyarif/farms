@extends('layouts.console_form')

@section('form')

    <!-- LIST
============================================================ -->
    <table class="table table-bordered table-responsive" id="list">
        <thead>
        <tr>
            <th>#</th>
            <th>{{ trans('roles.display_name') }}</th>
            <th>{{ trans('roles.description') }}</th>
            <th>{{ trans('common.operation') }}</th>
        </tr>
        </thead>
        <tbody>
            <template v-if="list.length > 0">
            <tr v-for="lst in list">
                <td>@{{ lst.id }}</td>
                <td>@{{ lst.display_name }}</td>
                <td>@{{ lst.description }}</td>
                <td>
                    <a class="btn btn-primary" href="/role/edit/@{{ lst.id }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
                    <a class="btn btn-danger" href="/role/delete/@{{ lst.id }}"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
                </td>
            </tr>
            </template>
            <template v-else>
            <tr>
                <td colspan="3">{{ trans('common.no_data') }}</td>
            </tr>
            </template>
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

