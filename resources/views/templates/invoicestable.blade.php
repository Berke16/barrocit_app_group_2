    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Invoices</h3>
            <div class="pull-right">
                <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                    <i class="glyphicon glyphicon-filter"></i>
                </span>
            </div>
        </div>
<<<<<<< HEAD:resources/views/templets/invoicestable.blade.php
    </div>
    <div class="panel-body">
        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#invoices-table" placeholder="Invoces Table" />
    </div>

    <div class="table_high">
        <table class="table table-hover text-center" id="invoices-table">
            <thead>
            <tr>
                <th class="text-center">Project</th>
                <th class="text-center">Invoice Nr.</th>
                <th class="text-center">Description</th>
                <th class="text-center">Total</th>
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
=======
        <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#invoices-table" placeholder="Invoces Table" />
        </div>
        <div class="table_high">
            <table class="table table-hover text-center" id="invoices-table">
                <thead>
                    <tr>
                        <th class="text-center">Project</th>
                        <th class="text-center">Invoice nr.</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Total</th>
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
>>>>>>> youssef:resources/views/templates/invoicestable.blade.php
