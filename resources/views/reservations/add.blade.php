@extends('layouts.index')
@section('title','Thêm mới')
@section('cssCustom')
@endsection
@section('content')
    <div class="container"style="margin: 100px 0">
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Số điện thoại:</label>
            <div class="col-10">
                <input class="form-control" type="text" id="phone">
            </div>
        </div>
        <div class="form-group row" id="guest" style="display: none">
            <label for="example-search-input" class="col-2 col-form-label">Khách hàng:</label>
            <div class="col-10" id="guest_name">
                <select class="form-control">
                </select>
            </div>
        </div>
    </div>
@endsection
@section('jsCustom')
    <script>
        $(document).ready(function () {
            $("#phone").change(function () {
                $("#guest").show();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                $.ajax({
                    url: "{{ url('/search') }}",
                    method: 'post',
                    data: {
                        phone: jQuery('input#phone').val()
                    },
                    success: function (data) {
                        $("#guest_name select").empty().html();
                       $.each(data,function (i,l) {
                           $("#guest_name select").show();
                           $("#guest_name input").hide();
                           $("#guest_name button").hide();
                           $("#guest_name select").append('<option>'+l['name']);
                       });
                       if(data.length===0)
                       {
                           $("#guest_name select").hide();
                           $("#guest_name").append(' <input class="form-control col-9" style="display: inline;" type="text" id="name"/> <button type="button" class="btn btn-default" id="add">Thêm</button> ');
                           $("button#add").click(function () {
                               $.ajaxSetup({
                                   headers: {
                                       'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                   }
                               });
                               $.ajax({
                                   url: "{{ url('/guest/add') }}",
                                   method: 'post',
                                   data: {
                                       phone: jQuery('input#phone').val(),
                                       name: jQuery('input#name').val()
                                   },
                                   success: function (data) {
                                       window.location.href="{{url('/')}}";
                                   }
                               });
                           });
                       }
                    },
                    error: function () {
                    }
                });
            });
        });
    </script>
@endsection