<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/28 0028
 * Time: 16:34
 */

class session
{
    function __construct()
    {
        session_start();
    }
    public function set($key,$vaule){
        $_SESSION[$key]=$vaule;
    }
    public function got($key){
       if(isset($_SESSION[$key])){
           return $_SESSION[$key];
       }else{
           return false;
       }
    }
    public function del($key){
        unset($_SESSION[$key]);
    }
}