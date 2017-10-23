@extends('layouts.master')
@section('location')
Home: Admin
@endsection
@section('content')
<div class="container">
    <div class="col-md-12">
        @include('tables.customerstabel')
    </div>
    <div class="col-md-12">
        @include('tables.projectstabel')
    </div>
    <div class="col-md-12">
        @include('tables.offerstable')
    </div>
    <div class="col-md-12">
        @include('tables.invoicestable')
    </div>
</div>
@endsection