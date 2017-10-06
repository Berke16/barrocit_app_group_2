
@extends('layout.master')

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
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->cp_name}} {{$customer->insertion}} {{$customer->cp_lastname}}</td>
                    <td>dd-mm-yyyy</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection