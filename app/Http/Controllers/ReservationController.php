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
    public function reservationDetails($id)
    {
        $result = DB::table('reserved_room')
            ->join('reservation','reserved_room.reservation_id','=','reserved_room.id')
            ->join('guests','reservation.guest_id','=','guests.id')
            ->where('guests.id','=',$id)
            ->select('guest_id','reservation_id','check_in','check_out')
            ->get();
        $guest = DB::table('guests')
            ->where('id','=',$id)
            ->get();
        return view('reservations.details')->with('result',json_decode($result,true))
            ->with('guest',json_decode($guest,true));
    }
}