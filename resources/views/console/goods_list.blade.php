@extends('layouts.console_form')

@section('form')
    <!-- SEARCH
    ============================================================ -->
    <form class="form-inline gap-bottom" method="post" action="/search/console/goods">

        <div class="form-group">
            <label for="category_id">Category</label>
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

        <button type="submit" class="btn btn-primary">
            <i class="fa fa-search">&nbsp;</i>
            Search
        </button>
    </form>

    <!-- LIST
============================================================ -->
    <table class="table table-bordered table-responsive" id="list">
        <thead>
        <tr>
            <th>#</th>
            <th>@lang('goods.name')</th>
            <th>@lang('common.sort')</th>
            <th>@lang('common.operation')</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="lst in list">
            <td>@{{ lst.id }}</td>
            <td>@{{ lst.name }}</td>
            <td>@{{ lst.sort }}</td>
            <td>
                <a class="btn btn-primary" href="/goods/edit/@{{ lst.id }}"><i class="fa fa-edit">&nbsp;</i>@lang('common.edit')</a>

                <a class="btn btn-primary" href="/goods/categories/associate/@{{ lst.id }}"><i class="fa fa-code-fork">&nbsp;</i>@lang('goods.associate_categories')</a>
                <a class="btn btn-primary" href="/goods/attributes/associate/@{{ lst.id }}"><i class="fa fa-cubes">&nbsp;</i>@lang('goods.associate_attributes')</a>
                <a class="btn btn-primary" href="/goods/galleries/associate/@{{ lst.id }}"><i class="fa fa-picture-o">&nbsp;</i>@lang('goods.associate_galleries')</a>

{{--                <a class="btn btn-primary" href="/goods/packages/associate/@{{ lst.id }}"><i class="fa fa-list">&nbsp;</i>{{ trans('goods.packages') }}</a>--}}

                <a class="btn btn-danger" href="/goods/delete/@{{ lst.id }}"><i class="fa fa-remove">&nbsp;</i>@lang('common.delete')</a>
            </td>
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
                var list = '{!! $list !!}';
                var dataJson = JSON && JSON.parse(list);
                this.$set('list', dataJson);
            }
        });
    </script>
@endsection

