
@extends('layouts.master')
@section('location')
Home: Development
@endsection
@section('content')
<div class="container">
<div class="col-md-9">
	@include('tables.customerstabel')
</div>
<div class="col-md-3">
	@include('tables.projectstabel')
</div>
</div>
@endsection