@extends('layouts.app')

@section('content')

    <div class="container cart">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol>
        <form action="/order" method="post">
            {{ csrf_field() }}
            <table class="table table-responsive table-bordered gap-top">
                <thead>
                <tr>
                    <th>Item</th>
                    <th>Number</th>
                    <th>Amount</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Apples</td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon">-</span>
                            <input type="number" class="form-control" name="number[]" value="5">
                            <span class="input-group-addon">+</span>
                        </div>
                    </td>
                    <td>
                       $425.8
                    </td>
                    <td>
                        <button class="btn btn-default">
                            <i class="fa fa-btn fa-remove">&nbsp;</i>
                            Remove
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Persimmon</td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon">-</span>
                            <input type="number" class="form-control" name="number[]" value="8">
                            <span class="input-group-addon">+</span>
                        </div>
                    </td>
                    <td>
                        $425.8
                    </td>
                    <td>
                        <button class="btn btn-default">
                            <i class="fa fa-btn fa-remove">&nbsp;</i>
                            Remove
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Peppers</td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon">-</span>
                            <input type="number" class="form-control" name="number[]" value="3">
                            <span class="input-group-addon">+</span>
                        </div>
                    </td>
                    <td>
                        $425.8
                    </td>
                    <td>
                        <button class="btn btn-default">
                            <i class="fa fa-btn fa-remove">&nbsp;</i>
                            Remove
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>

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
