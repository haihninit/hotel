<?php
/**
 * Created by PhpStorm.
 * User: haihu
 * Date: 10/6/2018
 * Time: 7:04 PM
 */

namespace App\Http\Controllers;


use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ReservationController extends BaseController
{
    public function search(Request $request)
    {
        $result = Reservation::where('customer_phone', '=', "{$request->get('phone')}")->get();
        return response()->json($result);
    }
    public function reservationDetails($id)
    {
        $result = Reservation::where('id','=',$id)->get();
        return view('reservations.details')->with('result',$result);
    }
}