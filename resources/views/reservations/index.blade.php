@extends('layouts.index')
@section('title','Quản lý đặt phòng')
@section('cssCustom')
@endsection
@section('content')
    <!--Table-->
    <table class="table">

        <!--Table head-->
        <thead>
        <tr>
            <th>#</th>
            <th>Họ tên</th>
            <th>SĐT</th>
            <th>Phòng</th>
            <th>Loại phòng</th>
            <th>Nhận phòng</th>
            <th>Trả phòng</th>
            <th>Số ngày</th>
            <th>Tổng tiền</th>
            <th>Ghi chú</th>
        </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
        @foreach($list as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['customer_name']}}</td>
                <td>{{$item['customer_phone']}}</td>
                <td>{{$item['room']}}</td>
                <td></td>
                <td>{{$item['time_in']}}</td>
                <td>{{$item['time_out']}}</td>
                <td></td>
                <td></td>
                <td>{{$item['note']}}</td>
            </tr>
        @endforeach
        </tbody>
        <!--Table body-->

    </table>
    <!--Table-->
@endsection