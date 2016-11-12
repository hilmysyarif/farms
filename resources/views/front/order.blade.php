@extends('layouts.app')

@section('content')

    <div class="container order gap-top">
        @include('front.shared.breadcrumbs')
        <form action="/confirm" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ trans('user.receive_info') }}</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-responsive">
                                <tr>
                                    <td>{{ trans('user.receiver') }}</td>
                                    <td>{{ $address->receiver }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('user.contact_phone') }}</td>
                                    <td>{{ $address->contact }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('user.addresses') }}</td>
                                    <td>
                                        {{ $address->pcd }} {{ $address->detail }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ trans('order.delivery_info') }}</h3>
                        </div>
                        <div class="panel-body">
                            {{ trans('order.default_express') }} <br>
                            {{ trans('order.shipping_fee') }}: <span id="shipping-fee">{{ $express->shippingFee }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ trans('order.goods_info') }}</h3>
                        </div>
                        <div class="panel-body">
                            <div id="cart-form" v-cloak>
                                <table class="table table-responsive table-bordered gap-top">
                                    <tbody>
                                    <tr v-for="good in goods">
                                        <td>
                                            <input type="hidden" name="cart_id[]" value="@{{ good.info.row_id }}">
                                            @{{ good.info.name }}
                                            <img class="img-responsive" v-bind:src="good.info.cover">
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
                                            @{{ good.info.total_price }}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-right" id="total-amount" v-cloak>
                {{ trans('cart.total_price') }}: @{{ totalPrice }} &nbsp;
                <input type="hidden" name="address_id" value="{{ $address->id }}">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-check"></i>
                    {{ trans('order.submit_order') }}
                </button>
            </div>
        </form>
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
            }
        });

        new Vue({
            el: '#total-amount',
            computed: {
                totalPrice: function () {
                    var shippingFee = {{ $express->shippingFee }};
                    return cartForm.totalPrice + shippingFee;
                }
            }
        });
    </script>
@endsection
