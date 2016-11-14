@extends('layouts.app')

@section('content')

    <div class="container order gap-top">
        @include('front.shared.breadcrumbs')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    {{ trans('cashier.you_need_pay') }} <kbd>{{ $amount }}</kbd>，{{ trans('cashier.scan_qrcode_below_to_pay') }}
                </div>
            </div>
            <div class="row gap-top">
                <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <img class="img-responsive center-block" src="/ckfinder/userfiles/images/p-1.jpg">
                    <div class="row text-center gap-top">{{ trans('cashier.scan_with_alipay') }}</div>
                </div>
                <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <img class="img-responsive center-block" src="/ckfinder/userfiles/images/p-1.jpg">
                    <div class="row text-center gap-top">{{ trans('cashier.scan_with_wechat') }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
