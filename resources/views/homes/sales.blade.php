
@extends('layout.master')
@section('location')
    Home: Sales
@endsection
@section('menu')
    <li>
        <a href="../customer/create">Add customer</a>
    </li>
@endsection
@section('content')
    <div class="container">
        @include('templates.customerstabel')
    </div>
@endsection