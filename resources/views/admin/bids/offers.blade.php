@extends('admin.admin')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4>My Offers</h4>
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>{{trans('bid.id')}}</th>
                            <th>{{trans('bid.bidder')}}</th>
                            <th>{{trans('bid.item')}}</th>
                            <th>Click for more info</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($offers as $bid)
                            <tr>
                                <td>#{{$bid->id}}</td>
                                <td>{{$bid->bidder->full_name}}</td>
                                @if(!empty($bid->truck_id))
                                    <td>Truck: {{$bid->item_name}}</td>
                                @endif
                                @if(!empty($bid->freight_id))
                                    <td>Freight: {{$bid->item_name}}</td>
                                @endif
                                @if(!empty($bid->contract_id))
                                    <td>Contract: {{$bid->item_name}}</td>
                                @endif
                                <td><a href="{{route('bid.details', $bid->id)}}">View details</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop