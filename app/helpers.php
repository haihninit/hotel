<?php
/**
 * Created by PhpStorm.
 * User: haihu
 * Date: 13/6/2018
 * Time: 4:30 PM
 */
function pt_datetime($str_time)
{
    $strtotime = strtotime($str_time);
    return date("H:i:s d-m-Y",$strtotime);
}