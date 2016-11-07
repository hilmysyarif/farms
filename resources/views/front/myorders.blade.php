@extends('layouts.app')

@section('content')
    <div class="container gap-top">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol>

        @include('front.shared.home_side')

        <div class="col-lg-10 col-sm-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ trans('user.my_orders') }}</div>

                        <div class="panel-body" id="cart-form">
                            <table class="table table-responsive table-bordered">
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
                                        <input type="hidden" name="cart_id[]" value="@{{ good.info.cart_id }}">
                                        @{{ good.info.name }}
                                        <img v-bind:src="good.info.cover" width="50">
                                    </td>
                                    <td>
                                <span v-for="attr in good.attrs">
                                    @{{ attr.name }}: @{{ attr.value }}@{{ attr.suffix }}
                                </span>
                                    </td>
                                    <td>
                                        @{{ good.info.number }}
                                    </td>
                                    <td>
                                        @{{ good.info.single_total_price * good.info.number }}
                                    </td>
                                    <td>
                                        <a class="btn btn-danger"
                                                href="/revokeorder/@{{ good.info.no }}"
                                                v-on:click="remove($index)"
                                                v-if="good.info.status == 0"
                                                type="button">
                                            <i class="fa fa-btn fa-remove">&nbsp;</i>
                                            {{ trans('common.delete') }}
                                        </a>

                                        <a class="btn btn-primary"
                                                href="/cashier/@{{ good.info.no }}"
                                                v-if="good.info.status == 0"
                                                type="button">
                                            <i class="fa fa-btn fa-cashier"></i>
                                            {{ trans('cashier.go_to_pay') }}
                                        </a>

                                        <a class="btn btn-default"
                                                href="/expressdetail/@{{ good.info.no }}"
                                                v-if="good.info.status == 1"
                                                type="button">
                                            <i class="fa fa-btn fa-truck"></i>
                                            {{ trans('cashier.view_shippint') }}
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="page">
                                <ul class="pagination">
                                    <li><a href="/detail" class="fa fa-chevron-left"></a></li>
                                    <li><a href="/detail">1</a></li>
                                    <li class="active"><a href="/detail">2</a></li>
                                    <li class="disabled"><a href="/detail">3</a></li>
                                    <li><a href="/detail">4</a></li>
                                    <li><a href="/detail">5</a></li>
                                    <li><a href="/detail" class="fa fa-chevron-right"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
