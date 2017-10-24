<div class="col-md-12">
    @php
    $projects = $customer->projects;
    @endphp
    @include('tables.projectstabel')
</div>


<div class="col-md-12">

    @php $offers = $customer->offers; @endphp
    @include('tables.offerstable')

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
                        <label for="description">Description:<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="total_project_price">Total project price:<span style="color: red">*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon">€</span>
                            <input type="text" id="total_project_price" class="form-control" aria-label="amount" name="total_project_price" value="{{old('total_project_price')}}" required>
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