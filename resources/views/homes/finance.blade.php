@extends('layout.master')
@section('location')
    Home: Finance
@endsection
@section('content')

    <div class="container">
        <div class="col-md-9">
            @include('templets.invoicestable')
        </div>
        <div class="col-md-3">
            @include('templets.projecttabel')
        </div>
        <div class="col-md-12">
            @include('templets.customerstabel')
        </div>
    </div>

@endsection