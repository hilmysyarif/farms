@extends('layouts.app')

@section('content')

    <div class="container cart gap-top">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol>
        <div id="cart-form" v-cloak>
            <form action="/order" method="post">
                {{ csrf_field() }}
                <table class="table table-responsive table-bordered gap-top">
                    <thead>
                    <tr>
                        <th>{{ trans('cart.items') }}</th>
                        <th>{{ trans('cart.attributes') }}</th>
                        <th>{{ trans('cart.quantity') }}</th>
                        <th>{{ trans('cart.amount') }}</th>
                        <th>{{ trans('cart.operation') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="good in goods">
                            <td>
                                @{{ good.info.name }}
                                <img v-bind:src="good.info.cover" width="50">
                            </td>
                            <td>
                                <span v-for="attr in good.attrs">
                                    @{{ attr.name }}: @{{ attr.value }}@{{ attr.suffix }}
                                </span>
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon" v-on:click="decreaseQuantity($index, $event)">-</span>
                                    <input type="number" class="form-control" name="number[]" value="@{{ good.info.number }}">
                                    <span class="input-group-addon" v-on:click="increaseQuantity($index, $event)">+</span>
                                </div>
                            </td>
                            <td>
                                @{{ good.info.single_total_price * good.info.number }}
                            </td>
                            <td>
                                <button class="btn btn-default" v-on:click="remove($index)" type="button">
                                    <i class="fa fa-btn fa-remove">&nbsp;</i>
                                    {{ trans('common.delete') }}
                                </button>
                            </td>
                        </tr>
                    </tbody>
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
                    return total;
                }
            },
            methods: {
                decreaseQuantity: function (index, event) {
                    if (this.$data.goods[index]['info']['number'] == 1)
                        return;
                    this.goods[index]['info']['number']--;
                },
                increaseQuantity: function (index, event) {
                    this.goods[index]['info']['number']++;
                },
                remove: function (index) {
                    this.goods.splice(index, 1);
                }
            }
        });
    </script>
@endsection
