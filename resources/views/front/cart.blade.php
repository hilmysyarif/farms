@extends('layouts.app')

@section('content')

    <div class="container cart gap-top">
        @include('front.shared.breadcrumbs')
        <div id="cart-form" v-cloak>
            <form action="/order" method="post">
                {{ csrf_field() }}
                <table class="table table-responsive table-striped table-condensed">
                    <tr v-for="good in goods">
                        <td>
                                <div class="col-md-2 col-xs-4 no-padding-left no-padding-right">
                                    <input type="hidden" name="cart_id[]" value="@{{ good.info.cart_id }}">
                                    <img class="img-responsive" v-bind:src="good.info.cover">
                                </div>

                                <div class="col-md-2 col-xs-8">@{{ good.info.name }}</div>
                                <div class="col-md-2 col-xs-8">
                                    <span v-for="attr in good.attrs">
                                        @{{ attr.name }}: @{{ attr.value }}@{{ attr.suffix }}
                                    </span>
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <div class="input-group">
                                        <span class="input-group-addon light-input-group-addon" v-on:click="decreaseQuantity($index, $event)">-</span>
                                        <input type="number" class="form-control light-form-control" name="number[]" value="@{{ good.info.number }}">
                                        <span class="input-group-addon light-input-group-addon" v-on:click="increaseQuantity($index, $event)">+</span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-3 no-padding-left">
                                    @{{ good.info.total_price }}
                                </div>
                                <div class="col-md-2 col-xs-1 no-padding-left text-right">
                                    <a href="#" v-on:click="remove($index)" type="button">
                                        <i class="fa fa-btn fa-remove">&nbsp;</i>
                                    </a>
                                </div>
                        </td>
                    </tr>
                </table>

                <div class="col-lg-12 text-right">
                    {{ trans('cart.total_price') }}: @{{ totalPrice }} &nbsp;
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-check"></i>
                        {{ trans('cart.checkout') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ URL::asset('js/vue.min.js') }}"></script>
    <script>
        var cartForm = new Vue({
            el: '#cart-form',
            data: {
                goods: []
            },
            ready: function () {
                var data = {!! json_encode($goods) !!};
                this.goods = data;
            },
            computed: {
                totalPrice: function () {
                    var total = 0;
                    for (var i = 0; i < this.$data.goods.length; i++) {
                        total += this.$data.goods[i]['info']['single_total_price'] * this.$data.goods[i]['info']['number'];
                    }
                    total = total.toFixed(2);
                    return total;
                }
            },
            methods: {
                decreaseQuantity: function (index, event) {
                    if (this.$data.goods[index]['info']['number'] == 1)
                        return;
                    this.goods[index]['info']['number']--;
                    var totalRowPrice = this.goods[index]['info']['single_total_price'] * this.goods[index]['info']['number'];
                    this.goods[index]['info']['total_price'] = totalRowPrice.toFixed(2);
                },
                increaseQuantity: function (index, event) {
                    this.goods[index]['info']['number']++;
                    var totalRowPrice = this.goods[index]['info']['single_total_price'] * this.goods[index]['info']['number'];
                    this.goods[index]['info']['total_price'] = totalRowPrice.toFixed(2);
                },
                remove: function (index) {
                    this.goods.splice(index, 1);
                }
            }
        });
    </script>
@endsection
