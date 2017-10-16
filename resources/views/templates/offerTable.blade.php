<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Offers</h3>
        <div class="pull-right">
            <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#addoffermodal">Add Offer</button>
        </div>
    </div>
    <div style="height: 200px; overflow: scroll; overflow-x: hidden ;">
        <table class="table table-hover text-center" id="invoices-table">
            <thead>
            <tr>
                <th class="text-center col-md-6">Offernumbers</th>
                <th class="text-center col-md-6">Status</th>

            </tr>
            </thead>
            <tbody>
            @foreach($offers as $offer)
                <tr>
                    <td>{{$offer->number}}</td>
                    <td>
                        <form action="{{action('offersController@status', $offer->id)}}" method="post" style="margin: 0;">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            @switch($offer->status)
                                @case(0)
                                <button type="submit" class="btn btn-danger btn-xs">Not accepted</button>
                                @break
                                @case(1)
                                <button type="submit" class="btn btn-success btn-xs">Accepted</button>
                                @break
                            @endswitch
                        </form>
                    </td>
                    <td>
                        <form action="{{action('offersController@destroy', $offer->id)}}" method="post">
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



