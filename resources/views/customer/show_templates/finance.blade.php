<div class="col-md-12">
    @php
        $invoices = $customer->invoices;
    @endphp
    @include('tables.invoicestable')
</div>

<div class="col-md-12">
    @php
        $projects = $customer->projects;
    @endphp
    @include('tables.projectstabel')
</div>

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
                        <label for="description">Description:<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:<span style="color: red">*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon">€</span>
                            <input type="text" id="price" class="form-control" aria-label="amount" name="price" value="{{old('price')}}">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="payday">Pay day:</label>
                        <input type="date" id="payday" class="form-control" name="payday" value="{{old('payday')}}">
                    </div>
                    <div class="form-group">
                        <label for="date_of_sending">Date of sending:<span style="color: red">*</span></label>
                        <input type="date" id="date_of_sending" class="form-control" name="date_of_sending" value="{{old('date_of_sending')}}" required>
                    </div>
                    <label for="projectid">Project:<span style="color: red">*</span></label>
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