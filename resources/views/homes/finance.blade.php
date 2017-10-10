
@extends('layout.master')
@section('location')
    Home: Finance
@endsection
@section('content')
    <div class="container">
        <div class="col-md-9">
            @include('templates.invoicestable')
        </div>

        <div class="col-md-3">
            @include('templates.projecttabel')
        </div>
        <div class="col-md-12">
            @include('templates.customerstabel')
        </div>
    </div>
@endsection