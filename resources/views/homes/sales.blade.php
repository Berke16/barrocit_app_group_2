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
	<div class="col-md-12">
		@include('tables.customerstabel')
	</div>
	<div class="col-md-12">
		@include('tables.offerstable')
	</div>
</div>
@endsection