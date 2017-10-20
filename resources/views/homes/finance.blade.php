
@extends('layouts.master')
@section('location')
Home: Finance
@endsection
@section('content')
<div class="container">
    <div class="col-md-9">
        @include('tables.invoicestable')
    </div>

    <div class="col-md-3">
        @include('tables.projecttabel')
    </div>
    <div class="col-md-12">
        @include('tables.customerstabel')
    </div>
</div>
@endsection