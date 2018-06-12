@extends('layouts.index')
@section('title','Quản lý đặt phòng')
@section('cssCustom')
@endsection
@section('content')
    <div class="container">
        <div class="card" style="margin-top: 100px">
            <div class="card-header">
                {{$result[0]['customer_name']}}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3 col-6">Số điện thoại</div>
                    <div class="col-sm-3 col-6">{{$result[0]['customer_phone']}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-6"></div>
                    <div class="col-sm-3 col-6">{{$result[0]['customer_phone']}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection