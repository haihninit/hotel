<?php
/**
 * Created by PhpStorm.
 * User: haihu
 * Date: 8/6/2018
 * Time: 4:21 PM
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home.index');
    }
}