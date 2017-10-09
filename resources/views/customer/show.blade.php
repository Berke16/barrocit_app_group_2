
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
                        <th>Faxnumber:</th>
                        <td>{{$customer->fax_number}}</td>
                    </tr>
                    <tr>
                        <th>Telephonenumber:</th>
                        <td>{{$customer->tele}}</td>
                    </tr>
                    <tr>
                        <th>Telephonenumber 2:</th>
                        <td>{{$customer->tele2}}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{$customer->street}}</td>
                    </tr>
                    <tr>
                        <th>Zipcode</th>
                        <td>{{$customer->zip_code}}</td>
                    </tr>
                    <tr>
                        <th>Residence:</th>
                        <td>{{$customer->residence}}</td>
                    </tr>
                    <tr>
                        <th>Housenummber:</th>
                        <td>{{$customer->housenumber}}</td>
                    </tr>
                </table>
            </section>
            <section class="col-xs-4">
                <table class="table table-borderless col-xs-12">
                    <tr>
                        <th>Address 2:</th>
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
                        <th>Residence 2:</th>
                        @if($customer->extraaddress != NULL)
                            <td>{{$customer->extraaddress->residence}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Housenummber 2:</th>
                        @if($customer->extraaddress != NULL)
                            <td>{{$customer->extraaddress->housenumber}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Contact-person:</th>
                        <td>{{$customer->cp_name}} {{$customer->cp_insetion}} {{$customer->cp_lastname}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$customer->mail}}</td>
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
                        <th>VAT-code:</th>
                        <td>{{$customer->vat_code}}</td>
                    </tr>
                    <tr>
                        <th>BCR:</th>
                        <td>
                            @switch($customer->bcr)
                                @case(0)
                                NO
                                @break
                                @case(1)
                                YES
                                @break
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <th>Creditworthy:</th>
                        <td>
                            @switch($customer->creditworthy)
                                @case(0)
                                NO
                                @break
                                @case(1)
                                YES
                                @break
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <th>Prospect:</th>
                        <td>
                            @switch($customer->prospect)
                                @case(0)
                                NO
                                @break
                                @case(1)
                                YES
                                @break
                            @endswitch
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
    <div class="container">
        <section class="col-md-12" style="padding: 0;">
            <div class="row">
                <div class="col-md-3">
                    @php
                        $projects = $customer->projects;
                    @endphp
                    <div class="table_height">
                        @include('templets.projecttabel')
                    </div>
                </div>
                <div class="col-md-9">
                    @php
                        $invoices = $customer->invoices->sortBy('status');
                    @endphp
                    <div class="table_height">
                        @include('templets.invoicestable')
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
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
                                <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#addoffermodal">Add Offer</button>
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