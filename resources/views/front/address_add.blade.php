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

                            <form class="form-horizontal" method="post" action="{{ url('/address/add') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="receiver" class="col-md-2 control-label">{{ trans('user.receiver') }}</label>
                                    <div class="col-md-10">
                                        <input id="receiver" type="text" class="form-control" name="receiver" value="{{ old('receiver') }}" />
                                        @if ($errors->has('receiver'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('receiver') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="contact" class="col-md-2 control-label">{{ trans('user.contact_phone') }}</label>
                                    <div class="col-md-10">
                                        <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" />
                                        @if ($errors->has('contact'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('contact') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="zone_id" class="col-md-2 control-label">{{ trans('user.address') }}</label>
                                    <div class="col-md-10">
                                        @include('console.shared.form-multiple-cols-select')
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="detail" class="col-md-2 control-label">{{ trans('user.address_detail') }}</label>
                                    <div class="col-md-10">
                                        <input id="detail" type="text" class="form-control" name="detail" value="{{ old('detail') }}" />
                                        @if ($errors->has('detail'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('detail') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="default"> {{ trans('user.set_default') }}
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
        new Vue({
            el: '#address',
            data: {
                name: 'zone_id',
                value: '0',
                notice: '{{ trans('common.please_choose') }}',
                selects: [],
                size: 10
            },
            ready: function () {
                this.selects = groupData(0);
            },
            methods: {
                loadChildren: function (pid, name) {
                    console.log(pid);
                    // load children
                    var tmp = groupData(pid);
                    if (tmp.length > 0) {
                        // This is not the last element.
                        this.selects = tmp;
                        $('#selects #name').text('{{ trans('common.please_choose') }}');
                    } else {
                        // This is the last element.
                        var input = $('#selects').children()[0];
                        $(input).val(pid);
                        $('#selects #name').text(name);
                    }
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
//            console.log(pcdList);
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
    </script>


@endsection
