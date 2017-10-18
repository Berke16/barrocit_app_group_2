
@extends('layouts.master')
@section('location')
Home: Sales
@endsection
@section('menu')
<li>
    <a href="{{'CustomersController@create'}}">Add customer</a>
</li>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @include('tables.customerstabel')
        </div>
        <div class="col-md-4">
            @include('tables.offerTable')
        </div>
    </div>
</div>
@endsection