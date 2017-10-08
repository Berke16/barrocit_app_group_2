@extends('layout.master')
@section('location')
    Home: Finance
@endsection
@section('content')

<div class="container">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Invoices</h3>
                <div class="pull-right">
                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                        <i class="glyphicon glyphicon-filter"></i>
                    </span>
                </div>
            </div>
            <div class="panel-body">
                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#invoices-table" placeholder="Invoces Table" />
            </div>
            <div style="height: 500px; overflow: scroll; overflow-x: hidden;">
                <table class="table table-hover text-center" id="invoices-table">
                    <thead>
                    <tr>
                        <th class="text-center">Project</th>
                        <th class="text-center">Invoice Nr.</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Totaal</th>
                        <th class="text-center">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($invoices as $invoice)
                            <tr>
                                <td>{{$invoice->project->name}}</td>
                                <td>{{$invoice->id}}</td>
                                <td>{{$invoice->description}}</td>
                                <td>{{$invoice->price}}</td>
                                <td>
                                    @switch($invoice->status)
                                        @case(0)
                                        <span class="label label-default">Not Sended</span>
                                        @break
                                        @case(1)
                                        <span class="label label-warning">Sended</span>
                                        @break
                                        @case(2)
                                        <span class="label label-danger">Late</span>
                                        @break
                                        @case(3)
                                        <span class="label label-success">Payed</span>
                                        @break
                                    @endswitch
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Projects</h3>
                <div class="pull-right">
                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                        <i class="glyphicon glyphicon-filter"></i>
                    </span>
                </div>
            </div>
            <div class="panel-body">
                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#projects-table" placeholder="Filter Projects" />
            </div>
            <div style="height: 500px; overflow: scroll; overflow-x: hidden;">
                <table class="table table-hover text-center" id="projects-table">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$project->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12">
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
            <div style="height: 500px; overflow: scroll; overflow-x: hidden;">
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
    </div>
</div>

@endsection