
@extends('layout.master')
    @section('location')
        Customer: {{$customer->name}}
    @endsection
@section('content')

    <div class="container-fluid well">
        <div class="container">
            <section class="col-xs-4">
                <table class="table table-borderless col-xs-12">
                    <tr>
                        <th>Company Name:</th>
                        <td>{{$customer->name}}</td>
                    </tr>
                    <tr>
                        <th>Faxnumbr:</th>
                        <td>{{$customer->fax_number}}</td>
                    </tr>
                    <tr>
                        <th>Telephonenumber:</th>
                        <td>{{$customer->tele}}</td>
                    </tr>
                    <tr>
                        <th>Telephonenumber2:</th>
                        <td>{{$customer->tele2}}</td>
                    </tr>
                    <tr>
                        <th>Adress:</th>
                        <td>{{$customer->street}}</td>
                    </tr>
                    <tr>
                        <th>Zipcode</th>
                        <td>{{$customer->zip_code}}</td>
                    </tr>
                    <tr>
                        <th>Resident:</th>
                        <td>{{$customer->residence}}</td>
                    </tr>
                    <tr>
                        <th>Housnummber</th>
                        <td>{{$customer->housenumber}}</td>
                    </tr>
                </table>
            </section>
            <section class="col-xs-4">
                <table class="table table-borderless col-xs-12">
                    <tr>
                        <th>Adress 2:</th>
                        @if($customer->extraaddress != NULL)
                            <td>{{$customer->extraaddress->street}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Zipcode 2:</th>
                        @if($customer->extraaddress != NULL)
                            <td>{{$customer->extraaddress->zip_code}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Resident 2:</th>
                        @if($customer->extraaddress != NULL)
                            <td>{{$customer->extraaddress->residence}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Housnummber 2:</th>
                        @if($customer->extraaddress != NULL)
                            <td>{{$customer->extraaddress->housenumber}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Contactperson:</th>
                        <td>{{$customer->cp_name}} {{$customer->cp_insetion}} {{$customer->cp_lastname}}</td>
                    </tr>
                    <tr>
                        <th>Email::</th>
                        <td>{{$customer->mail}}</td>
                    </tr>
                </table>
            </section>
            <section class="col-xs-4">
                <table class="table table-borderless col-xs-12">
                    <tr>
                        <th>Rekening:</th>
                        <td>{{$customer->banknumber}}</td>
                    </tr>
                    <tr>
                        <th>Salod:</th>
                        <td>{{$customer->balance}}</td>
                    </tr>
                    <tr>
                        <th>Limit:</th>
                        <td>{{$customer->limit}}</td>
                    </tr>
                    <tr>
                        <th>Ledgerbill:</th>
                        <td>{{$customer->ledgerbill}}</td>
                    </tr>
                    <tr>
                        <th>BTW-code:</th>
                        <td>{{$customer->vat_code}}</td>
                    </tr>
                    <tr>
                        <th>BKR:</th>
                        <td>
                            @switch($customer->bcr)
                                @case(0)
                                Nee
                                @break
                                @case(1)
                                Ja
                                @break
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <th>Credityworthy:</th>
                        <td>
                            @switch($customer->creditworthy)
                                @case(0)
                                Nee
                                @break
                                @case(1)
                                Ja
                                @break
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <th>Pospect:</th>
                        <td>
                            @switch($customer->prospect)
                                @case(0)
                                    Nee
                                @break
                                @case(1)
                                    Ja
                                @break
                            @endswitch
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
    <div class="container">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Projects</h3>
                    <div class="pull-right">
                        <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#addprojectmodal">Add Project</button>
                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                        <i class="glyphicon glyphicon-filter"></i>
                    </span>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#projects-table" placeholder="Filter Projects" />
                </div>
                <div style="height: 200px; overflow: scroll; overflow-x: hidden;">
                    <table class="table table-hover text-center" id="projects-table">
                        <thead>
                        <tr>
                            <th class="text-center">Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer->projects as $project)
                            <tr data-href="../project/{{$project->id}}">
                                <td>{{$project->name}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                <div style="height: 200px; overflow: scroll; overflow-x: hidden;">
                    <table class="table table-hover" id="invoices-table">
                        <thead>
                        <tr>
                            <th>Project</th>
                            <th>Nr.</th>
                            <th>Description</th>
                            <th>Totaal</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer->projects as $project)
                            @foreach($project->invoices as $invoice)
                                <tr>
                                    <td>{{$project->name}}</td>
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
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                                <th class="text-center col-md-9">Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$customer->actions->sortByDesc('created_at')->last()->date_of_action}}</td>
                                <td>{{$customer->actions->last()->description}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Offer's</h3>
                        <div class="pull-right">
                            <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#addoffermodal">Add Acction</button>
                        </div>
                    </div>
                    <div style="height: 200px; overflow: scroll; overflow-x: hidden ;">
                        <table class="table table-hover text-center" id="invoices-table">
                            <thead>
                            <tr>
                                <th class="text-center col-md-6">Offernubers</th>
                                <th class="text-center col-md-6">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customer->offers as $offer)
                                <tr>
                                    <td>{{$offer->number}}</td>
                                    <td>
                                        @switch($offer->status)
                                           @case(0)
                                                <span class="label label-default">Not Accepted</span>
                                            @break
                                            @case(1)
                                                <span class="label label-success">Accepted</span>
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
        </section>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Action's</h3>
                    <div class="pull-right">
                        <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#addacctionmodal">Add Action</button>
                    </div>
                </div>
                <div style="height: 460px; overflow: scroll; overflow-x: hidden;">
                    <table class="table table-hover text-center" id="invoices-table">
                        <thead>
                        <tr>
                            <th class="text-center col-md-3">Date</th>
                            <th class="text-center col-md-9">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer->actions->sortByDesc('date_of_action') as $action)
                            <tr>
                                <td>{{$action->date_of_action}}</td>
                                <td>{{$action->description}}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="addoffermodal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Offer</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <h4 class="text-center">{{"company name"}}</h4>
                        <div class="form-group">
                            <label for="offernumber">Offer number</label>
                            <input class="form-control" type="text" id="offernumber" name="offernumber">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Add" class="btn pull-right">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div id="addacctionmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Action</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <h4 class="text-center">{{"company name"}}</h4>
                        <div class="form-group">
                            <label for="action">Action</label>
                            <select name="action" id="action" class="form-control">
                                <option value="action">Next acction</option>
                                <option value="action">Action</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
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