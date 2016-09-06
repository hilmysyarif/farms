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
                        <input type="hidden" name="attrids[]" value="@{{ attr.id }}">
                        <input name="attr_id_@{{ attr.id }}[]" class="form-control" type="@{{ attr.type }}">
                        <div class="input-group-addon" v-show="attr.suffix">@{{ attr.suffix }}</div>
                    </div>
                </div>


                <div class="form-inline gap-top">
                    <div class="col-md-4">
                        <div class="list-group atrcats">
                            <a href="javascript:;" v-on:click="loadAttrs(atrcat.id)" v-for="atrcat in atrcats" class="list-group-item">
                                @{{ atrcat.name }}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
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
                    ],
                    atrcats: [
                    ]
                }
            },
            ready() {
                var atrcats = '{!! $atrcats !!}';
                var jsonData = JSON && JSON.parse(atrcats);
                this.$set('atrcats', jsonData);
            },
            methods: {
                loadAttrs: function(id) {
                    this.$http.get('/api/attrsByAtrcat/' + id).then(
                            (successResponse) => {
                        var data = successResponse.data;
                        var dataJson = JSON && JSON.parse(data);
                        if (dataJson.length > 0) {
                            this.$set('attributes', dataJson);
                        }
                    },(errorResponse) => {
                        console.log(errorResponse);
                    });
                }
            }
        });

        $(function() {
            $('.atrcats a').click(function() {
                $('.atrcats a').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
@endsection
