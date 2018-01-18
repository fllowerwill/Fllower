<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/29
 * Time: 11:59
 */

/*class router
{
    private $m;//模块
    private $f;//类文件
    private $a;//方法
    function getInfo(){
        $this->m=isset($_REQUEST['m'])?$_REQUEST['m']:'index';
        $this->f=isset($_REQUEST['f'])?$_REQUEST['f']:'index';
        $this->a=isset($_REQUEST['a'])?$_REQUEST['a']:'index';
    }

}*/


class router{
    private $m;//    后台模块
    private $f;//    类文件
    private $a;//    方法
    function getinfo(){
        $this->m=isset($_REQUEST['m'])?$_REQUEST['m']:'index';
        $this->f=isset($_REQUEST['f'])?$_REQUEST['f']:'index';
        $this->a=isset($_REQUEST['a'])?$_REQUEST['a']:'init';
        $path='module/'.$this->m;


        if(is_dir($path)){
            $file=$path.'/'.$this->f.'.class.php';
            if(is_file($file)){
                include_once $file;
                if(class_exists($this->f)){
                    $class=$this->f;
                    $c=new $class();
                    if(method_exists($c,$this->a)){
                        $fun=$this->a;
                        $c->$fun();
                    }else{
                        echo $this->a.'方法不存在';
                        exit;
                    }
                }else{
                    echo $this->f.'类不存在';
                    exit;

                }
            }else{
                echo $this->f.'文件不存在';
                exit;
            }
        }else{
            echo $this->m.'模块不存在';
            exit;


        }

    }
}
