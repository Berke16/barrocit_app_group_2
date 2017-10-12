
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
            <div class="row">
                <div class="col-md-8">
                    @include('templates.customerstabel')
                </div>
                <div class="col-md-4">
                    @include('templates.offerTable')
                </div>
            </div>


    </div>
@endsection