@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url('/goods/attributes/associate') }}" method="post">

        {{ csrf_field() }}
        <!-- ATTRIBUTES
        ===========================================-->
        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">@lang('goods.attributes')</label>
            <div class="col-md-10" id="attributes">
                <div class="form-inline">
                    <div class="input-group gap-right" v-for="attr in attributes">
                        <div class="input-group-addon">@{{ attr.name }}</div>
                        <input name="goods_attr_value[]" class="form-control" type="@{{ attr.type }}">
                        <div class="input-group-addon" v-show="attr.suffix">@{{ attr.suffix }}</div>
                    </div>
                </div>


                <div class="gap-top">
                    <div class="col-lg-4">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item">Morbi leo risus</a>
                            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item">Morbi leo risus</a>
                            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('console.shared.form-button')
    </form>
@endsection

@section('js')
    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script src="{{ URL::asset('js/vue-resource.min.js') }}"></script>
    <script>

        var attributes = new Vue({
            el: '#attributes',
            data() {
                return {
                    attributes: [
                        {
                            name: '质量',
                            type: 'number',
                            suffix: 'g'
                        },
                        {
                            name: '颜色',
                            type: 'color',
                            suffix: ''
                        }
                    ]
                }
            }
        });
    </script>
@endsection
