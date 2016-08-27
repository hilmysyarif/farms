@extends('layouts.console_form')

@section('form')

    <div class="list">
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>@lang('common.natural_order')</th>
                <th>分类名称</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in list">
                <td>@{{ $index }}</td>
                <td>@{{ item.name }}</td>
                <td>
                    <a class="btn btn-primary" href="/goods/attributes/list/@{{ item.name }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>
                    <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <!-- PAGINATION
============================================================ -->
    @include('console.shared.form-pagination')

@endsection

@section('js')
    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script src="{{ URL::asset('js/vue-resource.min.js') }}"></script>
    <script>
        var selects = new Vue({
            el: '.list',
            data() {
                return {
                    list: []
                }
            },
            ready() {
                var jsonData = JSON && JSON.parse('{!! $list !!}');
                this.$set('list', jsonData);
            }
        });
    </script>
@endsection
