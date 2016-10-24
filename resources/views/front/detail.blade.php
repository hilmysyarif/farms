@extends('layouts.app')

@section('content')
    <div class="container detail gap-top">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol>
        <div class="col-lg-6">
            <img class="img-responsive" src="{{ $row->cover_url }}" alt="Generic placeholder image" width="300" height="300">
            <ul class="gallery">
                <li><a href="#" class="fa fa-chevron-left"></a> </li>
                @foreach($row->galleries as $gallery)
                    <li>
                        <img class="img-thumbnail img-responsive" src="{{ $gallery->url }}" alt="Generic placeholder image" width="100" height="100">
                    </li>
                @endforeach
                <li><a href="#" class="fa fa-chevron-right"></a> </li>
            </ul>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6" id="ats" v-cloak>
            <h1>@{{ row.name }}</h1>
            <form action="/cart" method="get">
                <table class="table"">
                    <tr v-for="(tindex, atr) in row.ats">
                        <td>@{{ atr.name }}</td>
                        <td>
                            <div v-if="atr.type == 'color'" class="attribute btn-group color-group" data-toggle="buttons">
                                <label
                                        v-for="val in atr.values"
                                        v-on:click="cprice(tindex, $index, val.price)"
                                        class="btn btn-default" style="background-color: @{{ val.value }}">
                                    <input type="radio" name="attr_id[]" id="option@{{ $index }}" autocomplete="off" checked>&nbsp;&nbsp;&nbsp;&nbsp;
                                </label>
                            </div>
                            <div v-else class="attribute btn-group" data-toggle="buttons">
                                <label
                                        v-for="val in atr.values"
                                        v-on:click="cprice(tindex, $index, val.price)"
                                        class="btn btn-default">
                                    <input type="radio" name="attr_id[]" id="option@{{ $index }}" autocomplete="off"> @{{ val.value }} @{{ val.suffix }}
                                </label>
                            </div>
                        </td>

                    </tr>



                    {{--@foreach($row->ats as $attr)--}}
                    {{--<tr>--}}
                    {{--<td>{{ $attr['name'] }}</td>--}}
                    {{--<td>--}}
                    {{--@if($attr['type'] == 'color')--}}
                    {{--<div class="attribute btn-group color-group" data-toggle="buttons">--}}
                    {{--@foreach($attr['values'] as $key => $val)--}}
                    {{--<label class="btn btn-default active" style="background-color: {{ $val['value'] }}">--}}
                    {{--<input type="radio" name="attr_id[]" id="option{{ $key }}" autocomplete="off" checked>&nbsp;&nbsp;&nbsp;&nbsp;--}}
                    {{--</label>--}}
                    {{--@endforeach--}}
                    {{--</div>--}}
                    {{--@elseif($attr['type'] == 'text' || $attr['type'] == 'number')--}}
                    {{--<div class="attribute btn-group" data-toggle="buttons">--}}
                    {{--@foreach($attr['values'] as $key => $val)--}}
                    {{--<label class="btn btn-default">--}}
                    {{--<input type="radio" name="attr_id[]" id="option{{ $key }}" autocomplete="off"> {{ $val['value'] }} {{ $attr['suffix'] }}--}}
                    {{--</label>--}}
                    {{--@endforeach--}}

                    {{--</div>--}}
                    {{--@endif--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}
                    <tr>
                        <td>{{ trans('goods.price') }}</td>
                        <td>@{{ row.default_price }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-btn fa-cart-plus">&nbsp;&nbsp;</i>{{ trans('goods.add_to_cart') }}
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-12 gap-top">
            <!--Nav tabs-->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#description" aria-controls="description" role="tab" data-toggle="tab">{{ trans('goods.introduction') }}</a>
                </li>
                <li role="presentation">
                    <a href="#package" aria-controls="package" role="tab" data-toggle="tab">{{ trans('goods.itemsList') }}</a>
                </li>
            </ul>
            <!--container-fluid gap-top -->
            <div class="tab-content gap-top">
                <div role="tabpanel" class="tab-pane fade in active" id="description">
                    {!! $row->article->content !!}
                </div>
                <div role="tabpanel" class="tab-pane fade" id="package">
                    <table class="table table-responsive table-bordered">
                        @foreach ($itemsList as $item)
                            <tr>
                                <td>{{ $item['item'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div><!-- /.col-lg-6 -->
    </div>

@endsection

@section('js')
    <script src="{{ URL::asset('js/vue.min.js') }}"></script>
    <script>
        var row = {!! json_encode($row) !!};
        var ats = {!! json_encode($row->ats) !!};
        var default_price = row.default_price;
        var hold = [];
        var attrs = new Vue({
            el: '#ats',
            data: function() {
                return {
                    row: row
                };
            },
            methods: {
                cprice: function (rindex, cindex, price) {
                    row.default_price = default_price;
                    // Store price for each attribute.
                    hold[rindex] = price;

                    var tmpPrice = computeResultByHold();

                    row.default_price += tmpPrice;
                }
            }
        });

        $(function() {
            // Choose first value of every attribute when initiate page.
            $('.btn-group').each(function (index, item) {
                $(item).children().first().click();
            });

            for (var i = 0; i < ats.length; i++) {
                hold[i] = ats[i]['values'][0]['price'];
            }
            var tmpPrice = computeResultByHold();
            attrs.$data.row.default_price += tmpPrice;
        });


        // Compute result according hold array.
        function computeResultByHold() {
            var tmpPrice = 0;
            for (var i = 0; i < hold.length; i++) {
                tmpPrice += hold[i];
            }
            return tmpPrice;
        }
    </script>
@endsection