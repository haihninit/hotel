<?php
/**
 * Created by PhpStorm.
 * User: haihu
 * Date: 10/6/2018
 * Time: 7:04 PM
 */

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ReservationController extends BaseController
{
    public function reservationOrders($id)
    {
        $result = DB::table('reserved_room')
            ->join('reservation','reserved_room.reservation_id','=','reservation.id')
            ->join('guests','reservation.guest_id','=','guests.id')
            ->where('guests.id','=',$id)
            ->select('guest_id','reservation_id','check_in','check_out')
            ->groupBy('guest_id','reservation_id','check_in','check_out')
            ->get();
        $guest = DB::table('guests')
            ->where('id','=',$id)
            ->get();
        return view('reservations.orders')->with('result',json_decode($result,true))
            ->with('guest',json_decode($guest,true));
    }
    public function reservationDetails($id)
    {
        $result = DB::table('reserved_room')
            ->join('reservation','reserved_room.reservation_id','=','reservation.id')
            ->where('reservation.id','=',$id)
            ->join('room','room.number','=','reserved_room.number_of_rooms')
            ->join('room_type','room_type.id','=','room.room_type_id')
            ->get();
            return view('reservations.details')->with('result',json_decode($result,true));
    }
    public function reservationList()
    {
        $result = DB::table('reservation')->get();
    }
    public  function createReservation()
    {
        return view('reservations.add');
    }

}