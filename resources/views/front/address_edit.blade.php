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
    <script src="{{ URL::asset('js/snippets/vue.select.js') }}"></script>
    <script>
        new Vue({
            el: '#address',
            data: {
                name: 'zone_id',
                value: {{ $row->zone_id }},
                notice: '{{ old('option_name') ? old('option_name') : trans('common.please_choose') }}',
                selects: [],
                size: 10,
                helper: new selectsHelper(),
                addressStack: [],
                reachBottom: false
            },
            ready: function () {
                this.selects = this.helper.groupChildren(0, pcdList);

                // for edit
                if (this.value > 0) {
                    this.initAddress(this.value);
                    this.addressStack.reverse();

                    var input = $('#selects').children()[0];
                    this.resetChoosenInfo(input, this.value, this.addressStack[this.addressStack.length - 1])
                }
            },
            methods: {
                loadChildren: function (id, name, pid) {
                    var input = $('#selects').children()[0];
                    if (this.reachBottom) {
                        // This is the last element. When click again, replace the last element.
                        this.addressStack.pop();
                        this.addressStack.push(name);
                        this.resetChoosenInfo(input, id, name);
                        return;
                    }
                    if (pid == 0) {
                        this.resetChoosenInfo(input, 0, this.notice);
                        this.addressStack = [];
                    }


                    // load children
                    var tmp = this.helper.groupChildren(id, pcdList);
                    if (tmp.length > 0) {
                        // This is not the last element.
                        this.selects = tmp;
                        $('#selects #name').text('{{ trans('common.please_continue_choose') }}');
                    } else {
                        // This is the last element.
                        this.reachBottom = true;
                        this.resetChoosenInfo(input, id, name);
                    }

                    // update full address.
                    this.addressStack.push(name);
                },
                loadParents: function () {
                    if (this.isTopLevel)
                        return;

                    if (this.reachBottom) {
                        this.addressStack.pop();
                        this.reachBottom = false;
                    }
                    this.addressStack.pop();

                    var input = $('#selects').children()[0];
                    this.resetChoosenInfo(input, 0, '{{ trans('common.please_continue_choose') }}');

                    var tmp = this.helper.groupParents(this.selects[0][0].pid, pcdList);
                    this.selects = tmp;
                },
                resetChoosenInfo: function (ele, id, name) {
                    $(ele).val(id).next().val(name);
                    $('#selects #name').text(name);
                },
                initAddress: function (id) {
                    if (id == 0)
                        return;
                    for (var i = 0; i < pcdList.length; i++) {
                        if (pcdList[i].id == id) {
                            this.addressStack.push(pcdList[i].name);
                            this.initAddress(pcdList[i].pid);
                            break;
                        }
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
                },
                fullAddress: function() {
                    return this.addressStack.join(' ');
                },
                isTopLevel: function () {
                    return this.selects[0][0].pid == 0;
                }
            }
        });
    </script>


@endsection
