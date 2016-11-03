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
                        <div class="panel-heading">{{ trans('user.addresses') }}</div>

                        <div class="panel-body" id="address" v-cloak>

                            <form class="form-horizontal" method="post" action="{{ url('/address/'.$row->id.'/edit') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('receiver') ? ' has-error' : '' }}">
                                    <label for="receiver" class="col-md-2 control-label">{{ trans('user.receiver') }}</label>
                                    <div class="col-md-10">
                                        <input id="receiver" type="text" class="form-control" name="receiver" value="{{ $row->receiver }}" />
                                        @if ($errors->has('receiver'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('receiver') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                                    <label for="contact" class="col-md-2 control-label">{{ trans('user.contact_phone') }}</label>
                                    <div class="col-md-10">
                                        <input id="contact" type="text" class="form-control" name="contact" value="{{ $row->contact }}" />
                                        @if ($errors->has('contact'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('contact') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('zone_id') ? ' has-error' : '' }}">
                                    <label for="zone_id" class="col-md-2 control-label">{{ trans('user.address') }}</label>
                                    <div class="col-md-10">
                                        @include('console.shared.form-multiple-cols-select')
                                        <div class="full-address"></div>
                                        @if ($errors->has('zone_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('zone_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                                    <label for="detail" class="col-md-2 control-label">{{ trans('user.address_detail') }}</label>
                                    <div class="col-md-10">
                                        <input id="detail" type="text" class="form-control" name="detail" value="{{ $row->detail }}" />
                                        @if ($errors->has('detail'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('detail') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('default') ? ' has-error' : '' }}">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="default" @if ($row->default) checked @endif > {{ trans('user.set_default') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                @include('console.shared.form-button')
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ URL::asset('js/pcd.list.js') }}"></script>
    <script src="{{ URL::asset('js/vue.min.js') }}"></script>
    <script>
        var fullAddress = [];
        new Vue({
            el: '#address',
            data: {
                name: 'zone_id',
                value: '{{ $row->zone_id }}',
                notice: '{{ old('option_name') ? old('option_name') : trans('common.please_choose') }}',
                selects: [],
                size: 10
            },
            ready: function () {
                this.selects = groupData(0);
            },
            methods: {
                loadChildren: function (pid, name) {
                    // load children
                    var tmp = groupData(pid);
                    if (tmp.length > 0) {
                        // This is not the last element.
                        this.selects = tmp;
                        $('#selects #name').text('{{ trans('common.please_continue_choose') }}');
                    } else {
                        // This is the last element.
                        var input = $('#selects').children()[0];
                        $(input).val(pid).next().val(name);
                        $('#selects #name').text(name);
                    }

                    // update full address.
                    fullAddress.push(name);
                    $('#full-address').text(fullAddress.join(' '));
                }
            },
            computed: {
                groupClass: function () {
                    if (this.selects.length >= 3) {
                        return 'col-md-4';
                    } else if (this.selects.length == 2) {
                        return 'col-md-6';
                    } else {
                        return 'container-fluid';
                    }
                }
            }
        });


        function groupData(pcode) {
            var tmp = [];
            for (var i = 0; i < pcdList.length; i++) {
                if (pcdList[i].pcode == pcode) {
                    tmp.push({
                        id: pcdList[i].code,
                        name: pcdList[i].name,
                        pid: pcdList[i].pcode
                    });
                }
            }
            // split tmp to groups. size is 10.
            var tmp1 = [];
            var tmp2 = [];
            var counter = 0;
            var size = 10;
            for (var i = 0; i < tmp.length; i++) {
                if (counter < size) {
                    tmp2.push(tmp[i]);
                    counter++;
                }

                // prepared one group.
                if (counter >= size || i == tmp.length -1) {
                    tmp1.push(tmp2);
                    counter = 0;
                    tmp2 = [];
                }
            }
            return tmp1;
        }

        // preapre full address
        var res = [];

        $(function () {
            var code = {{ $row->zone_id }};
            getFullAddress(code);
            $('#full-address').text(res.reverse().join(' '));
            var currentName = '';
            for (var i = 0; i < pcdList.length; i++) {
                if (code == pcdList[i].code) {
                    currentName = pcdList[i].name;
                    break;
                }
            }
            $('#name').text(currentName);
            var optionNameInput = $('#selects').children()[1];
            $(optionNameInput).val(currentName);
        });


        function getFullAddress (code) {
            for (var i = 0; i < pcdList.length; i++) {
                if (pcdList[i].code == code) {
                    res.push(pcdList[i].name);
                    getFullAddress(pcdList[i].pcode);
                    break;
                }
            }
        }
    </script>


@endsection
