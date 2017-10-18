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
                <th class="col-sm-3">Name</th>
                <th class="col-sm-3">Contact person</th>
                <th class="col-sm-3">Latest contact</th>
                <th class="col-sm-1 text-center">Status</th>
                <th class="col-sm-1">Remove</th>

            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <th>{{$customer->id}}</th>
                    <th data-href="../customer/{{$customer->id}}">{{$customer->name}}</th>
                    <th>{{$customer->cp_name}}</th>
                    <th>@if($customer->actions->count() > 0){{$customer->actions->last()->date_of_action}}@endif</th>
                    <th class="text-center">
                        @switch($customer->status())
                            @case(false)
                            <span class="label label-success">Good</span>
                            @break
                            @case(true)
                            <span class="label label-danger" >Beyond limit</span>
                            @break
                        @endswitch
                    </th>
                    <th>
                        <form action="{{action('customersController@destroy',$customer->id)}}" method="post" style="z-index: 100; margin: 0;">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button  type="submit" class="glyphicon glyphicon-remove btn-xs btn-danger"></button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>