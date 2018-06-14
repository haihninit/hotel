<?php
/**
 * Created by PhpStorm.
 * User: haihu
 * Date: 14/6/2018
 * Time: 9:58 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guests';
    public $timestamps = true;

}