@extends('layouts.app')

@section('content')
    <div class="container detail gap-top">
        @include('front.shared.breadcrumbs')
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="container-fluid">
                <div class="col-md-2 col-lg-2 hidden-xs hidden-sm op">
                    <a href="###" class="fa fa-chevron-left"></a>
                </div>
                <div class="swiper-container col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    @foreach($row->galleries as $gallery)
                        <div class="pane">
                            <img class="" src="{{ $gallery->url }}" width="100%" height="100%">
                        </div>
                    @endforeach
                </div>
                <div class="col-md-2 col-lg-2 hidden-xs hidden-sm op">
                    <a href="###" class="fa fa-chevron-right"></a>
                </div>
            </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="ats" v-cloak>
            <h1>@{{ row.name }}</h1>
            <form action="/cart" method="post">

                {{ csrf_field() }}

                <table class="table"">
                    <tr v-for="(tindex, atr) in row.ats">
                        <td>@{{ atr.name }}</td>
                        <td>
                            <div v-if="atr.type == 'color'" class="attribute btn-group color-group" data-toggle="buttons">
                                <label
                                        v-for="val in atr.values"
                                        v-on:click="cprice(tindex, $index, val.price, val.id)"
                                        class="btn btn-default" style="background-color: @{{ val.value }}">
                                    <input type="radio" name="attr_id[]" id="option@{{ $index }}" autocomplete="off" checked>&nbsp;&nbsp;&nbsp;&nbsp;
                                </label>
                            </div>
                            <div v-else class="attribute btn-group" data-toggle="buttons">
                                <label
                                        v-for="val in atr.values"
                                        v-on:click="cprice(tindex, $index, val.price, val.id)"
                                        class="btn btn-default">
                                    <input type="radio" name="attr_id[]" id="option@{{ $index }}" autocomplete="off"> @{{ val.value }} @{{ val.suffix }}
                                </label>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>数量</td>
                        <td><input class="form-control" type="text" name="number" v-on:blur="multipleValues" value="1"> </td>
                    </tr>
                    <tr>
                        <td>{{ trans('goods.price') }}</td>
                        <td>@{{ row.default_price }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="hidden" name="goods_id" value="{{ $id }}">
                            <input type="hidden" name="atrgids" value="@{{ atrgids }}">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-btn fa-cart-plus">&nbsp;&nbsp;</i>{{ trans('goods.add_to_cart') }}
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div><!-- /.col-lg-6 -->
    </div>
    <div class="container">
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
        var hold = []; // coordinate
        var holdIds = [];
        var attrs = new Vue({
            el: '#ats',
            data: function() {
                return {
                    row: row,
                    atrgids: ''
                };
            },
            methods: {
                cprice: function (rindex, cindex, price, id) {
                    row.default_price = default_price;
                    // Store price for each attribute.
                    hold[rindex] = price;
                    holdIds[rindex] = id;

                    var tmpPrice = computeResultByHold();
                    row.default_price += tmpPrice;
                    this.$data.atrgids = holdIds.join(',');
                },
                multipleValues: function (event) {
                    var ele = event.target;
                    var obj = $(ele);
                    var number = obj.val();
                    if (isNaN(number)) {
                        obj.val(1);
                    }

                    number = obj.val();
                    number = Math.floor(number);
                    obj.val(number);
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
                holdIds[i] = ats[i]['values'][0]['id'];
            }
            var tmpPrice = computeResultByHold();
            attrs.$data.atrgids = holdIds.join(',');
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
    <script src="{{ URL::asset('js/hammer.min.js') }}"></script>
    <script>
        var reqAnimationFrame = (function() {
            return window[Hammer.prefixed(window, "requestAnimationFrame")] || function(callback) {
                        setTimeout(callback, 1000 / 60);
                    }
        })();

        function dirProp(direction, hProp, vProp) {
            return (direction & Hammer.DIRECTION_HORIZONTAL) ? hProp : vProp
        }


        /**
         * Carousel
         * @param container
         * @param direction
         * @constructor
        */
        function HammerCarousel(container, direction) {
            this.container = container;
            this.direction = direction;

            this.panes = Array.prototype.slice.call(this.container.children, 0);
            this.containerSize = this.container[dirProp(direction, 'offsetWidth', 'offsetHeight')];

            this.currentIndex = 0;

            this.hammer = new Hammer.Manager(this.container);
            this.hammer.add(new Hammer.Pan({ direction: this.direction, threshold: 10 }));
            this.hammer.on("panstart panmove panend pancancel", Hammer.bindFn(this.onPan, this));

            this.show(this.currentIndex);
        }


        HammerCarousel.prototype = {
            /**
             * show a pane
             * @param {Number} showIndex
             * @param {Number} [percent] percentage visible
             * @param {Boolean} [animate]
             */
            show: function(showIndex, percent, animate){
                showIndex = Math.max(0, Math.min(showIndex, this.panes.length - 1));
                percent = percent || 0;

                var className = this.container.className;
                if(animate) {
                    if(className.indexOf('animate') === -1) {
                        this.container.className += ' animate';
                    }
                } else {
                    if(className.indexOf('animate') !== -1) {
                        this.container.className = className.replace('animate', '').trim();
                    }
                }

                var paneIndex, pos, translate;
                for (paneIndex = 0; paneIndex < this.panes.length; paneIndex++) {
                    pos = (this.containerSize / 100) * (((paneIndex - showIndex) * 100) + percent);
                    if(this.direction & Hammer.DIRECTION_HORIZONTAL) {
                        translate = 'translate3d(' + pos + 'px, 0, 0)';
                    } else {
                        translate = 'translate3d(0, ' + pos + 'px, 0)'
                    }
                    this.panes[paneIndex].style.transform = translate;
                    this.panes[paneIndex].style.mozTransform = translate;
                    this.panes[paneIndex].style.webkitTransform = translate;
                }

                this.currentIndex = showIndex;
            },

            /**
             * handle pan
             * @param {Object} ev
             */
            onPan : function (ev) {
                var delta = dirProp(this.direction, ev.deltaX, ev.deltaY);
                var percent = (100 / this.containerSize) * delta;
                var animate = false;

                if (ev.type == 'panend' || ev.type == 'pancancel') {
                    if (Math.abs(percent) > 20 && ev.type == 'panend') {
                        this.currentIndex += (percent < 0) ? 1 : -1;
                    }
                    percent = 0;
                    animate = true;
                }

                this.show(this.currentIndex, percent, animate);
            }
        };

        // the horizontal pane scroller
        var outer = new HammerCarousel(document.querySelector(".swiper-container"), Hammer.DIRECTION_HORIZONTAL);

        // each pane should contain a vertical pane scroller
//        Hammer.each(document.querySelectorAll(".swiper-container"), function(container) {
//            // setup the inner scroller
//            var inner = new HammerCarousel(container, Hammer.DIRECTION_VERTICAL);
//
//            // only recognize the inner pan when the outer is failing.
//            // they both have a threshold of some px
//            outer.hammer.get('pan').requireFailure(inner.hammer.get('pan'));
//        });


        // click action of arrow
        $(function () {
            $('.op').click(function () {
                var opIndex = $(this).index();
                if (opIndex == 0) {
                    outer.currentIndex += -1;
                } else {
                    outer.currentIndex += 1;
                }

                outer.show(outer.currentIndex, 0, true);
            });
        });
    </script>
@endsection