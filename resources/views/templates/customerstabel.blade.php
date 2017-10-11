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
                <th class="col-sm-3">Cusromer nr.</th>
                <th class="col-sm-3">Name</th>
                <th class="col-sm-3">Contact person</th>
                <th class="col-sm-3">Latest contact</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr data-href="../customer/{{$customer->id}}" @if($customer->status()) class="bg-danger" @endif>
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