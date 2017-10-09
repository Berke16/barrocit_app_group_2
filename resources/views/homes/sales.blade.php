
@extends('layout.master')
@section('location')
    Home: Sales
@endsection
@section('menu')
    <li><a href="../customer/create">Add Customer</a></li>
@endsection
@section('content')

<div class="container">
    @include('templets.customerstabel')
</div>
@endsection