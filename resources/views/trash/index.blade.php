
@extends('layouts.master')
@section('location')
    Home: Admin
@endsection
@section('content')
    <div class="container">
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
                <div class="table_style">
                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th class="col-sm-1">Nr.</th>
                            <th class="col-sm-5">Name</th>
                            <th class="col-sm-5">Contact person</th>
                            <th class="text-center col-md-1"></th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->cp_name}} {{$customer->cp_insertion}} {{$customer->lastname}}</td>
                                <td class="text-center">
                                    <form action="{{action('TrashController@restoreCustomer', $customer->id)}}" method="post" style="z-index: 100; margin: 0;">
                                        {{csrf_field()}}
                                        <button  type="submit" class="glyphicon glyphicon-retweet btn-xs btn-warning"></button>
                                    </form>
                                </td>
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
                <div class="table_style">
                    <table class="table table-hover text-center" id="projects-table">
                        <thead>
                        <tr>
                            <th class="text-center">Customer Name</th>
                            <th class="text-center">Name</th>
                            <th class="text-center col-md-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>

                                <td>{{$project->customer->name}}</td>
                                <td>{{$project->name}}</td>
                                <td>
                                    <form action="{{action('TrashController@restoreProject', $project->id)}}" method="post" style="z-index: 100; margin: 0;">
                                        {{csrf_field()}}
                                        <button  type="submit" class="glyphicon glyphicon-retweet btn-xs btn-warning"></button>
                                    </form>
                                </td>
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
                    <h3 class="panel-title">Offers</h3>
                </div>
                <div style="height: 200px; overflow: scroll; overflow-x: hidden ;">
                    <table class="table table-hover text-center" id="invoices-table">
                        <thead>
                        <tr>
                            <th class="text-center">Offernumbers</th>
                            <th class="text-center">Customer name</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Price</th>
                            <th class="text-center col-md-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($offers as $offer)
                            <tr>
                                <td>{{$offer->id}}</td>
                                <td>{{$offer->customer->name}}</td>
                                <td>{{$offer->description}}</td>
                                <td>€ {{$offer->total_project_price}}</td>
                                <td>
                                    @if($offer->status == 0)
                                        <form action="{{action('TrashController@restoreOffer', $offer->id)}}" method="post" style="margin: 0;">
                                            {{csrf_field()}}
                                            <button class="glyphicon glyphicon-retweet btn-xs btn-warning"></button>
                                        </form>
                                    @endif
                                </td>

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
                <div class="table_style">
                    <table class="table table-hover text-center" id="invoices-table">
                        <thead>
                        <tr>
                            <th class="text-center">Invoice Nr.</th>
                            <th class="text-center">Project name</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Total</th>
                            <th class="text-center col-md-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoices as $invoice)
                            <tr>
                                <td>{{$invoice->id}}</td>
                                <td>{{$invoice->project->name}}</td>
                                <td>{{$invoice->description}}</td>
                                <td>{{$invoice->price}}</td>
                                <td>
                                    <form action="{{action('TrashController@restoreInvoice', $invoice->id)}}" method="post" style="z-index: 100; margin: 0;">
                                        {{csrf_field()}}
                                        <button  type="submit" class="glyphicon glyphicon-retweet btn-xs btn-warning"></button>
                                    </form>
                                </td>
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
                    <h3 class="panel-title">Users</h3>
                    <div class="pull-right">
            <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                <i class="glyphicon glyphicon-filter"></i>
            </span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#invoices-table" placeholder="Invoces Table" />
                </div>
                <div class="table_style">
                    <table class="table table-hover text-center" id="invoices-table">
                        <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Department type</th>
                            <th class="text-center">Email</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            @if($user->id != Auth::User()->id)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->type}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <form action="{{action('TrashController@restoreUser', $user->id)}}" method="post" style="margin: 0;">
                                            {{csrf_field()}}
                                            <button class="glyphicon glyphicon-retweet btn-xs btn-warning"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection