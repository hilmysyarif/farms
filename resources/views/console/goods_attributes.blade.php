@extends('layouts.console_form')

@section('form')

    <form class="form-horizontal" action="{{ url('/goods/attributes/associate') }}" method="post">

        {{ csrf_field() }}
        <input type="hidden" name="goods_id" value="{{ $goods_id }}">
        <!-- ATTRIBUTES
        ===========================================-->
        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">@lang('goods.attributes')</label>
            <div class="col-md-10" id="attributes">
                <div class="form-inline">
                    <div class="input-group gap-right" v-for="attr in attributes">
                        <div class="input-group-addon">@{{ attr.name }}</div>
                        <input type="hidden" name="attrids[]" value="@{{ attr.id }}">
                        <input name="attr_id_@{{ attr.id }}" class="form-control" type="@{{ attr.type }}">
                        <div class="input-group-addon" v-show="attr.suffix">@{{ attr.suffix }}</div>
                    </div>
                </div>
                <div class="form-inline gap-top">
                    <div class="col-md-4">

                        <div class="list-group atrcats">
                            <span class="list-group-item"><strong>属性分类</strong></span>
                            <a href="javascript:;"
                               v-on:click="loadAttrs(atrcat.id)"
                               v-for="atrcat in atrcats"
                               class="list-group-item">
                                @{{ atrcat.name }}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="list-group attrs">
                            <span class="list-group-item"><strong>属性</strong></span>
                            <a href="javascript:;" class="list-group-item"
                               v-on:click="appendAttr($index)"
                               v-bind:class="{ 'active': attr.active }"
                               v-for="attr in attrs">
                                @{{ attr.name }}
                            </a>
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
                    ],
                    attrs: [
                    ]
                }
            },
            ready() {
                var atrcats = '{!! $atrcats !!}';
                var jsonData = JSON && JSON.parse(atrcats);
                this.$set('atrcats', jsonData);

                var attrs = '{!! $attrs !!}';
                jsonData = JSON && JSON.parse(attrs);
                for (var i = 0; i < jsonData.length; i++)
                    jsonData[i].active = false;
                this.$set('attrs', jsonData);

                // attributes
                var attributes = '{!! $associatedAttrs !!}';
                jsonData = JSON && JSON.parse(attributes);
                console.log(jsonData);
                if (jsonData.length > 0) {
                    this.$set('attributes', jsonData);
                }
            },
            methods: {
                loadAttrs: function(id) {
                    this.$http.get('/api/attrsByAtrcat/' + id).then((successResponse) => {

                        // update attributes which are waitting for fill out.
                        var data = successResponse.data;
                        var dataJson = JSON && JSON.parse(data);
                        if (dataJson.length > 0) {
                            this.$set('attributes', dataJson);
                        }

                        // update attributes which are waitting for choosing.
                        var tmp = [];
                        for (var i = 0; i < this.attrs.length; i++) {
                            var tmp1 = this.attrs[i];
                            tmp1.active = false;
                            for (var j = 0; j < dataJson.length; j++) {
                                if (tmp1.id == dataJson[j].id) {
                                    tmp1.active = true
                                }
                            }
                            tmp.push(tmp1);
                        }
                        this.$set('attrs', tmp);
                    },(errorResponse) => {
                        console.log(errorResponse);
                    });
                },
                appendAttr: function(index) {
                    console.log(index);
                }
            }
        });

        $(function() {
            $('.atrcats a').click(function() {
                $('.atrcats a').removeClass('active');
                $(this).addClass('active');
            });

            $('.attrs a').click(function() {
                if ($(this).hasClass('active'))
                    $(this).removeClass('active');
                else
                    $(this).addClass('active');

//                console.log(attributes.attrs);
            });
        });
    </script>
@endsection
