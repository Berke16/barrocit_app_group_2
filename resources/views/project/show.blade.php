
@extends('layout.master')
@section('location')
    Project: {{$project->name}}
@endsection
@section('content')


<div class="container-fluid well">
    <div class="container">
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Project name:</th>
                    <td>{{$project->name}}</td>
                </tr>
                <tr>
                    <th>Description:</th>
                    <td>{{$project->description}}</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>{{$project->status}}</td>
                </tr>
                <tr>
                    <th>Start date:</th>
                    <td>dd-mm-yyyy</td>
                </tr>
                <tr>
                    <th>Deadline:</th>
                    <td>dd-mm-yyyy</td>
                </tr>
                <tr>
                    <th>Mentained contract:</th>
                    <td>{{$project->maintained_contract}}</td>
                </tr>
            </table>
        </section>
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Applications:</th>
                    <td>{{$project->applications}}</td>
                </tr>
                <tr>
                    <th>Hardware:</th>
                    <td>{{$project->hardware}}</td>
                </tr>
                <tr>
                    <th>Operating system:</th>
                    <td>{{$project->operating_system}}</td>
                </tr>
                <tr>
                    <th>Appointments:</th>
                    <td>{{$project->appointments}}</td>
                </tr>
            </table>
        </section>
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Company name:</th>
                    <td><a href="/customer/{{$project->customer->id}}">{{$project->customer->name}}</a></td>
                </tr>
                <tr>
                    <th>Internal contact person:</th>
                    <td>{{$project->customer->cp_name}} {{$project->customer->cp_insertion}} {{$project->customer->cp_lastname}}</td>
                </tr>
            </table>
        </section>
    </div>
</div>
<div class="container">
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
        <div style="height: 200px; overflow: scroll; overflow-x: hidden;">
            <table class="table table-hover text-center" id="invoices-table">
                <thead>
                <tr>
                    <th class="text-center">Invoice Nr.</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Totaal</th>
                    <th class="text-center">Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($project->invoices as $invoice)
                        <tr>
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

@endsection