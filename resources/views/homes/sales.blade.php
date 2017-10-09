
@extends('layout.master')
@section('location')
    Home: Sales
@endsection
@section('menu')
    <li><a href="../customer/create">Add Customer</a></li>
@endsection
@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Customers</h3>
            <div class="pull-right">
                <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                    <i class="glyphicon glyphicon-filter"></i>
                </span>
            </div>
        </div>
        <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
        </div>
        <table class="table table-hover" id="dev-table">
            <thead>
            <tr>
                <th class="col-sm-3">Klanten nr.</th>
                <th class="col-sm-3">Name</th>
                <th class="col-sm-3">Contact Person</th>
                <th class="col-sm-3">Latest Cotntact</th>
            </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr data-href="../customer/{{$customer->id}}">
                        <th>{{$customer->id}}</th>
                        <th>{{$customer->name}}</th>
                        <th>{{$customer->cp_name}}</th>
                        <th>dd-mm-yyyy</th>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection