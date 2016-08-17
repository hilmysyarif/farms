@extends('layouts.app')

@section('content')

    <div class="container order">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol>
        <form action="/cashier" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Address</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-responsive">
                                <tr>
                                    <td>Contactor</td>
                                    <td>Varion Wurion</td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>+86 13257738847</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>Storming fortress, Stormwind.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cart</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-responsive table-bordered gap-top">
                                <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Number</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Apples</td>
                                    <td>
                                        <div class="input-group">
                                            5
                                        </div>
                                    </td>
                                    <td>
                                        $425.8
                                    </td>
                                </tr>
                                <tr>
                                    <td>Persimmon</td>
                                    <td>
                                        <div class="input-group">
                                            8
                                        </div>
                                    </td>
                                    <td>
                                        $425.8
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peppers</td>
                                    <td>
                                        <div class="input-group">
                                           3
                                        </div>
                                    </td>
                                    <td>
                                        $425.8
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-right">
                Total: $1277.4 &nbsp;
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-check"></i>
                    Order
                </button>
            </div>
        </form>
    </div>

@endsection
