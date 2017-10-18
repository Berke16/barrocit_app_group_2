
@extends('layout.master')
@section('location')
Project: {{$project->name}}
@endsection
@section('content')
@if($project->customer->status())
<p class="alert alert-danger text-center">This customer of the following project is beyond limit!</p>
@endif
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
                    <th>Start date:</th>
                    <td>{{$project->start_date}}</td>
                </tr>
                <tr>
                    <th>Deadline:</th>
                    <td>{{$project->deadline}}</td>
                </tr>
                <tr>
                    <th>Maintained contract:</th>
                    <td>
                        @switch($project->maintained_contract)
                        @case(1)
                        Yes
                        @break
                        @case(0)
                        No
                        @endswitch
                    </td>
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
        <form action="{{action('ProjectsController@destroy', $project->id)}}" method="post" class="btn-group pull-right">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#invoicemodal">Add invoice</button>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-default" type="submit" value="Delete project">
        </form>
    </div>
</div>
<div class="container">
 @php $invoices = $project->invoices @endphp
 @include('templates.invoicestable')
</div>

<!-- Modelbox voor het maken van de invoices. -->

<div id="invoicemodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add invoice:</h4>
            </div>
            <div class="modal-body">
                <form action="{{ action('InvoicesController@store')}}" method="post" class="">
                    {{ csrf_field()}}
                    <h4 class="text-center">Project: {{$project->name}}</h4>
                    <div class="form-group">
                        <label for="description">Description:<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:<span style="color: red">*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon">€</span>
                            <input type="text" id="price" class="form-control" aria-label="amount" name="price">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="payday">Pay day:<span style="color: red">*</span></label>
                        <input type="date" id="payday" class="form-control" name="payday">
                    </div>
                    <div class="form-group">
                        <label for="date_of_sending">Date of sending:<span style="color: red">*</span></label>
                        <input type="date" id="date_of_sending" class="form-control" name="date_of_sending" required>
                    </div>
                    <input type="hidden" name="projectid" value="{{$project->id}}">
                    <div class="modal-footer">
                        <input type="submit" value="Add" class="btn pull-right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection