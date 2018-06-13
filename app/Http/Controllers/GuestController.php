<?php
/**
 * Created by PhpStorm.
 * User: haihu
 * Date: 13/6/2018
 * Time: 2:43 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class GuestController extends BaseController
{
    public function search(Request $request)
    {
        $input = $request->get('phone');
        $guest = DB::table('guests')
            ->where('phone','=',$input)
            ->get();
        return response()->json($guest);
    }
}