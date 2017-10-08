
@extends('layout.master')
@section('location')
    Home: Development
@endsection
@section('content')

    <div class="container">
        <div class="col-md-9">
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
                <div>
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
                <div>
                    <table class="table table-hover text-center" id="projects-table">
                        <thead>
                        <tr>
                            <th class="text-center">Name</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($projects as $project)
                                    <tr data-href="../project/{{$project->id}}">
                                        <td>{{$project->name}}</td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection