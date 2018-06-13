@extends('layouts.index')
@section('title','Quản lý đặt phòng')
@section('cssCustom')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Đơn đặt phòng của khách hàng <b style="text-transform: uppercase;">{{$guest[0]['first_name']}} {{$guest[0]['last_name']}}</b></h3>
            </div>
        </div>
        <div class="row">
            @foreach($result as $key=>$item)
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header"> #{{$key+1}}</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nhận phòng: {{$item['check_in']}}</li>
                            <li class="list-group-item">Trả phòng: {{$item['check_out']}}</li>
                        </ul>
                    <div class="card-footer"><a href="{{url('reservation/details')}}/{{$item['reservation_id']}}">Xem chi tiết</a></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection