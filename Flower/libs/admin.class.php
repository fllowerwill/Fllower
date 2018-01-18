<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/3
 * Time: 14:02
 */

class admin
{
    public $s;
    function __construct()
    {

        $this->s=new Smarty();
        $this->s->setCompileDir(ROOT_PATH.'compile/');
        $this->s->setTemplateDir(ROOT_PATH.'template/');

    }
    function jump($mess,$url){
        $this->s->assign('mess',$mess);
        $this->s->assign('url',$url);
        $this->s->display('admin/mess.html');
    }
}