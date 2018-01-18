<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/18
 * Time: 10:41
 */


class index extends admin
{


    function init()
    {
        $this->s->display('index/hfy_index.html');

    }

    function doctor()
    {
        $this->s->display('index/mls_index.html');

    }

    function doctor2()
    {
        $this->s->display('index/doctor.html');

    }

    function around()
    {
        $this->s->display('index/around.html');

    }

    function mrrPre()
    {
        $this->s->display('index/mrrPre.html');

    }

    function shoucang()
    {
        $this->s->display('index/hfy_shop_list.html');

    }

    function zjrz()
    {
        $this->s->display('index/wx-zjrz-1.html');
    }
    function zjrz2()
    {
        $this->s->display('index/wx-zjrz-2.html');
    }

    function integral()
    {
        $this->s->display('index/integral.html');
    }

    function search()
    {
        $this->s->display('index/search.html');

    }

    function search2()
    {
        $this->s->display('index/page-no.html');

    }

    function search3()
    {
        $this->s->display('index/search-in.html');

    }

    function type()
    {
        $this->s->display('index/type.html');

    }
    function typelist()
    {
        $this->s->display('index/typelist.html');

    }

    function content()
    {
        $this->s->display('index/flower-content.html');

    }
    function changepass()
    {
        $this->s->display('index/changepass.html');

    }
    function screen()
    {
        $this->s->display('index/hbj_index.html');

    }

    function register()
    {
        $this->s->display('index/wxx-register.html');

    }
    function lock()
    {
        $this->s->display('index/wxx-suo.html');

    }
    function signin()
    {
        $this->s->display('index/sign-in.html');

    }
    function award(){
        $this->s->display('index/coupon.html');

    }

}