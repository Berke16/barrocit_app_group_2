
@extends('layout.master')
@section('location')
Customer: {{$customer->name}}
@endsection
@section('content')
@if($customer->status())
<p class="alert alert-danger text-center">This customer is beyond limit!</p>
@endif
<div class="container-fluid well">
    <div class="container">
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Company name:</th>
                    <td>{{$customer->name}}</td>
                </tr>
                <tr>
                    <th>Contact person:</th>
                    <td>{{$customer->cp_name}} {{$customer->cp_insetion}} {{$customer->cp_lastname}}</td>
                </tr>
                <tr>
                    <th>E-mail:</th>
                    <td>{{$customer->mail}}</td>
                </tr>
                <tr>
                    <th>Telephonenumber:</th>
                    <td>{{$customer->tele}}</td>
                </tr>
                <tr>
                    <th>Faxnumber:</th>
                    <td>{{$customer->fax_number}}</td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td>{{$customer->street}}</td>
                </tr>
                <tr>
                    <th>Zipcode:</th>
                    <td>{{$customer->zip_code}}</td>
                </tr>
                <tr>
                    <th>Housenumber:</th>
                    <td>{{$customer->housenumber}}</td>
                </tr>
                <tr>
                    <th>Residence:</th>
                    <td>{{$customer->residence}}</td>
                </tr>
            </table>
        </section>
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Telephonenumber 2:</th>
                    <td>{{$customer->tele2}}</td>
                </tr>
                <tr>
                    <th>Address 2:</th>
                    <td>{{$customer->street2}}</td>
                </tr>
                <tr>
                    <th>Zipcode 2:</th>
                    <td>{{$customer->zip_code2}}</td>
                </tr>
                <tr>
                    <th>Housenumber 2:</th>
                    <td>{{$customer->housenumber2}}</td>
                </tr>
                <tr>
                    <th>Residence 2:</th>
                    <td>{{$customer->residence2}}</td>
                </tr>
            </table>
        </section>
        <section class="col-xs-4">
            <table class="table table-borderless col-xs-12">
                <tr>
                    <th>Banknumber:</th>
                    <td>{{$customer->banknumber}}</td>
                </tr>
                <tr>
                    <th>Balance:</th>
                    <td>{{$customer->saldo()}}</td>
                </tr>
                <tr>
                    <th>Limit:</th>
                    <td>{{$customer->limit}}</td>
                </tr>
                <tr>
                    <th>VAT-code:</th>
                    <td>{{$customer->vat_code}}</td>
                </tr>
                <tr>
                    <th>BCR:</th>
                    <td>
                        @switch($customer->bcr)
                        @case(0)
                        No
                        @break
                        @case(1)
                        Yes
                        @break
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <th>Creditworthy:</th>
                    <td>
                        @switch($customer->creditworthy)
                        @case(0)
                        No
                        @break
                        @case(1)
                        Yes
                        @break
                        @endswitch
                    </td>
                </tr>
                <tr>
                    <th>Prospect:</th>
                    <td>
                        @switch($customer->prospect)
                        @case(0)
                        No
                        @break
                        @case(1)
                        Yes
                        @break
                        @endswitch
                    </td>
                </tr>
            </table>
        </section>
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addacctionmodal">Add appointment</button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addoffermodal">Add offer</button>
            <a href="{{action('ProjectsController@create', $customer->id)}}" class="btn btn-default">Add project</a>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#invoicemodal">Add invoice</button>
        </div>
    </div>
</div>
<div class="container">
    <section class="col-md-12" style="padding: 0;">
        <div class="col-md-3">
            @php
            $projects = $customer->projects;
            @endphp
            @include('tables.projecttabel')
        </div>
        <div class="col-md-9">
            @php
            $invoices = $customer->invoices;
            @endphp
            @include('tables.invoicestable')
        </div>
    </section>
    <section class="col-md-6" style="padding: 0;">
        <div class="col-md-12" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Latest contact</h3>
                </div>
                <div style="height: 200px; overflow: scroll; overflow-x: hidden;">
                    <table class="table table-hover text-center" id="invoices-table">
                        <thead>
                            <tr>
                                <th class="text-center col-md-3">Date</th>
                                <th class="text-center col-md-8">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if($customer->actions->count() > 0)
                                <td>{{$customer->actions->last()->date_of_action}}</td>
                                <td class="col-md-9">{{$customer->actions->last()->description}}</td>
                                @else
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">

            @php $offers = $customer->offers; @endphp
            @include('tables.offerTable')

        </div>
    </section>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Appointments</h3>
                <div class="pull-right">

                </div>
            </div>
            <div style="height: 460px; overflow: scroll; overflow-x: hidden;">
                <table class="table table-hover text-center" id="invoices-table">
                    <thead>
                        <tr>
                            <th class="text-center col-md-3">Date</th>
                            <th class="text-center col-md-8">Description</th>
                            <th class="text-center col-md-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customer->actions->sortByDesc('date_of_action') as $action)
                        <tr>
                            <td>{{$action->date_of_action}}</td>
                            <td class="col-md-9">{{$action->description}}</td>
                            <td>
                                <form action="{{action('ActionsController@destroy', $action->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="glyphicon glyphicon-remove btn-xs btn-danger"></button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modelbox voor het maken van de offertes. -->

<div id="addoffermodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add offer:</h4>
            </div>
            <div class="modal-body">
                <form action="{{action('OffersController@store')}}" method="post" class="">
                    {{ csrf_field()}}
                    <h4 class="text-center">Customer: {{$customer->name}}</h4>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="price">*Total project price</label>
                        <div class="input-group">
                            <span class="input-group-addon">€</span>
                            <input type="text" class="form-control" aria-label="amount" name="price">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <input type="hidden" name="customerid" value="{{$customer->id}}">
                    <div class="modal-footer">
                        <input type="submit" value="Add" class="btn pull-right">
                    </div>
                </form>
            </div>
        </div>
    </div>
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
                    <h4 class="text-center">Customer: {{$customer->name}}</h4>
                    <div class="form-group">
                        <label for="description">*Description</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="price">*Price</label>
                        <div class="input-group">
                            <span class="input-group-addon">€</span>
                            <input type="text" class="form-control" aria-label="amount" name="price">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="payday">*Pay day</label>
                        <input type="date" class="form-control" name="payday">
                    </div>
                    <div class="form-group">
                        <label for="date_of_sending">*Date of sending</label>
                        <input type="date" class="form-control" name="date_of_sending" required>
                    </div>
                    <label for="projectid">Project:</label>
                    <select class="form-control" name="projectid" id="projectid">
                        @foreach($customer->projects as $project)
                        <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                    </select>
                    <div class="modal-footer">
                        <input type="submit" value="Add" class="btn pull-right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modelbox voor het maken van de acties. -->

<div id="addacctionmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add appointment:</h4>
            </div>
            <div class="modal-body">
                <form action="{{action('ActionsController@store')}}" method="post" class="">
                    {{ csrf_field() }}
                    <h4 class="text-center">Customer: {{$customer->name}}</h4>
                    <input type="hidden" name="customerid" value="{{$customer->id}}">
                    <div class="form-group">
                        <label for="date_of_action">*Date:</label>
                        <input type="date" class="form-control" id="date_of_action" name="date_of_action" required>
                    </div>
                    <div class="form-group">
                        <label for="time_of_action">*Time:</label>
                        <input type="time" class="form-control" id="time_of_action" name="time_of_action" required>
                    </div>
                    <div class="form-group">
                        <label for="description">*Description:</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Add" class="btn pull-right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection