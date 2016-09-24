@extends('layouts.console_form')

@section('form')

    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>用户名</th>
            <th>邮箱</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Red jk</td>
            <td>$54.20</td>
            <td>
                <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Remove</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Yellow jk</td>
            <td>$54.20</td>
            <td>
                <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Remove</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Round walnut</td>
            <td>$54.20</td>
            <td>
                <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Remove</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Clear pepper</td>
            <td>$54.20</td>
            <td>
                <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Remove</a>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Round persimmon</td>
            <td>$54.20</td>
            <td>
                <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Remove</a>
            </td>
        </tr>
        </tbody>
    </table>

    <!-- PAGINATION
============================================================ -->
    @include('console.shared.form-pagination')

@endsection
