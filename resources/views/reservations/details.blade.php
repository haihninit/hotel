@extends('layouts.index')
@section('title','Quản lý đặt phòng')
@section('cssCustom')
@endsection
@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Phòng</th>
            <th scope="col">Loại</th>
            <th scope="col">Sức chứa</th>
            <th scope="col">Giá</th>
        </tr>
        </thead>
        <tbody>
        @foreach($result as $key=>$item)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$item['number']}}</td>
            <td>{{($item['description'])=="DOUBLE"?"PHÒNG ĐÔI":"PHÒNG ĐƠN"}}</td>
            <td>{{$item['max_capacity']}}</td>
            <td>{{number_format($item['price'])}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Thời gian nhận phòng: <b>{{pt_datetime($item['check_in'])}}</b></li>
            <li class="list-group-item">Thời gian trả phòng: <b>{{pt_datetime($item['check_out'])}}</b></li>
            <li class="list-group-item">Tổng tiền: <b>{{number_format($item['total'])}}</b></li>
            <li class="list-group-item">Đã cọc: <b>{{number_format($item['deposit'])}}</b></li>
            <li class="list-group-item">Phụ thu: <b>{{($item['surcharge']==0)?"Không phụ thu":number_format($item['surcharge'])}}</b></li>
        </ul>
@endsection