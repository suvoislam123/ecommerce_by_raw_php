<?php 
namespace utility;
include_once("Utility.php");
class Route extends Utility{
    public static function redirect($url){
        header('location:'.$url);
    }

}