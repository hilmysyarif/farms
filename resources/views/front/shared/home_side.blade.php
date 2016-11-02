<div class="col-lg-2 col-sm-2">
    <div class="row">

    </div>
    <div class="row">
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ url('/home') }}">
                    <i class="fa fa-home"></i>
                    {{ trans('user.home') }}
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('/orders') }}">
                    <i class="fa fa-list-alt"></i>
                    {{ trans('user.orders') }}
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ url('/address') }}">
                    <i class="fa fa-send"></i>
                    {{ trans('user.addresses') }}
                </a>
            </li>
            {{--<li class="list-group-item">--}}
            {{--<a href="{{ url('/comments') }}">--}}
            {{--<i class="fa fa-comments"></i>--}}
            {{--{{ trans('user.comments') }}--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="list-group-item">--}}
            {{--<a href="{{ url('/collection') }}">--}}
            {{--<i class="fa fa-star"></i>--}}
            {{--{{ trans('user.collection') }}--}}
            {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>