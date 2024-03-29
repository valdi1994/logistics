@extends('client.client')

@section('content')

    <div class="container">
        <div class="row">
            <h4>My Bids</h4>
            <table class="table table-row table-responsive table-striped">
                <thead>
                <tr>
                    <th>{{trans('bid.id')}}</th>
                    <th>{{trans('bid.bidder')}}</th>
                    <th>{{trans('bid.item')}}</th>
                    <th>{{trans('bid.description')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bids as $bid)
                    <tr>
                        <td>{{$bid->freight_id}}</td>
                        <td>{{$bid->bidder}}</td>
                        @if(empty($bid->freight_id))
                            <td>Truck: {{$bid->item_name}}</td>
                        @else
                            <td>Freight: {{$bid->item_name}}</td>
                        @endif
                        <td>{{$bid->description}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop