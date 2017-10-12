<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Offers</h3>
        <div class="pull-right">
            <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#addoffermodal">Add Offer</button>
        </div>
    </div>
    <div style="height: 250px; overflow: scroll; overflow-x: hidden ;">
        <table class="table table-hover text-center" id="invoices-table">
            <thead>
            <tr>
                <th class="text-center col-md-6">Offernumbers</th>
                <th class="text-center col-md-6">Status</th>
                <th class="text-center col-md-6">change status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($offers as $offer)
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
                    <td>
                        <form action="{{action('offersController@status', $offer->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            @if($offer->status == 1)
                                <button class="btn btn-success glyphicon glyphicon-thumbs-up"></button>
                            @elseif($offer->status == 0)
                            <button class="btn btn-danger glyphicon glyphicon-thumbs-down"></button>
                                @endif
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>



