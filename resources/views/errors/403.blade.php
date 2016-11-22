@extends('layouts.error')

@section('content')
    <div class="container">
        <h1>403</h1>
        {{ trans('errors.403_no_access') }}
    </div>
@endsection
