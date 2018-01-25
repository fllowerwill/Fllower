<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 10:19
 */

class index extends admin
{
    function init(){

        $this->s->display('admin/login.html');
    }
    function check(){
        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $session=new session();

            $db=new db('admin');
            $row=$db->selOne('*',"user='$user'");

            if($row){
                if($row['pass']==$pass){
                    $session->set('user',$user);

                    $this->jump('登录成功','index.php?m=admin&a=main');
                }
                else{

                    $this->jump('密码错误','index.php?m=admin');
                }
            }else{

                $this->jump('账号不存在','index.php?m=admin');
            }
            $db->close();

    }
    function main(){
        $sess=new session();
        if ($sess->got('user')){
            $this->s->assign('user',$sess->got('user'));
            $this->s->display('admin/main.html');
        }else{
            $this->jump('请先登录','index.php?m=admin');
        }
    }
    function dropout(){
        $se=new session();
        $se->del('user');
        $this->jump('退出成功','index.php?m=admin');
    }
    function changepass(){
        $s=new session();
        $s->got('user');
        $this->s->assign('user',$s->got('user'));
        $this->s->display('admin/changepass.html');
    }
    function updatepass(){

        $db=new db('admin');
        $name=$_REQUEST['name'];
        $pass=$_REQUEST['pass'];
        $row=$db->update("pass='$pass'","user='$name'");
        if($row===1){
            echo 'ok';
        }
        else{
            echo 'no';
        }
    }

}