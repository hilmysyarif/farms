@extends('layouts.console_form')

@section('form')
    <!-- SEARCH
    ============================================================ -->
    <form class="form-inline gap-bottom" method="post" action="/search/console/goods">

        <div class="form-group">
            <label for="category_id">Category</label>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fa fa-search">&nbsp;</i>
            Search
        </button>
    </form>

    <!-- LIST
============================================================ -->
    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>Goods name</th>
            <th>Price</th>
            <th>Sort</th>
            <th>Category</th>
            <th>Operation</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Red jk</td>
            <td>$54.20</td>
            <td>1</td>
            <td>Apple</td>
            <td>
                <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Remove</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Yellow jk</td>
            <td>$54.20</td>
            <td>1</td>
            <td>Apple</td>
            <td>
                <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Remove</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Round walnut</td>
            <td>$54.20</td>
            <td>1</td>
            <td>Walnut</td>
            <td>
                <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Remove</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Clear pepper</td>
            <td>$54.20</td>
            <td>1</td>
            <td>Pepper</td>
            <td>
                <a class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit</a>
                <a class="btn btn-danger"><i class="fa fa-remove">&nbsp;</i>Remove</a>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Round persimmon</td>
            <td>$54.20</td>
            <td>1</td>
            <td>Persimmon</td>
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

