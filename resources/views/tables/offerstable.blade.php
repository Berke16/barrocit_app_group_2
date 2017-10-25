<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Offers</h3>
    </div>
    <div style="height: 200px; overflow: scroll; overflow-x: hidden ;">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th class="text-center">Offernumbers</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Status</th>
                    <th class="text-center"></th>

                </tr>
            </thead>
            <tbody>
                @foreach($offers as $offer)
                <tr>
                    <td>{{$offer->id}}</td>
                    <td>{{$offer->description}}</td>
                    <td>€ {{$offer->total_project_price}}</td>
                    <td>
                        <form action="{{action('OffersController@statusChange', $offer->id)}}" method="post" style="margin: 0;">
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
                        @if($offer->status == 0)
                        <form action="{{action('OffersController@destroy', $offer->id)}}" method="post" style="margin: 0;">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="glyphicon glyphicon-remove btn-xs btn-danger"  @if(Auth::User()->type != 'sales' && Auth::User()->type != 'admin') disabled @endif></button>
                        </form>
                        @endif
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



