<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 17:26
 */

class type extends admin
{
    public $btr='';
    public $str='';
    function init(){
        $db=new db('type');
        $this->typeshow($db);
        $this->s->assign("btr",$this->btr);

        $this->s->display('admin/typelist.html');
    }
    function typeshow($d,$pid=0,$n=0)
    {
        $arr = $d->selAll("*", "pid=$pid");

        $s = str_repeat('-', $n);
        if ($arr) {
            foreach ($arr as $item) {
                $this->btr .= "        
            <tr>
                <td>{$item['id']}</td>
                <td>{$s}{$item['title']}</td>
                <td>{$item['durl']}</td>
                <td>{$item['pid']}</td>
                <td><img src='{$item['img']}' alt=''></td>
                <td>{$item['english']}</td>
                <td>
                    <textarea name='' id='' cols='5' rows='3'>这是类别的描述</textarea>
                </td>
                <td>
                        <a href='index.php?m=admin&f=type&a=deltype&id={$item['id']}'><button type='button' class='btn btn-danger'>删除</button></a>
                        <a href='index.php?m=admin&f=type&a=updatetype&id={$item['id']}'><button type='button' class='btn btn-info'>修改</button></a>
                    </td>
            </tr>
                ";
                $this->typeshow($d, $item['id'], $n + 1);
            }
        }

    }
    function gettrree($db,$pid=0,$n=0,$current=null){
        $s=str_repeat("-",$n);
        $arr=$db->selAll("*","pid=$pid");
        if($arr){
            foreach ($arr as $item){
                if ($current==$item['id']){
                    $this->str.="<option selected value='{$item['id']}'>{$s}{$item['title']}</option>";

                }else{
                    $this->str.="<option value='{$item['id']}'>{$s}{$item['title']}</option>";
                }

                $this->gettrree($db,$item['id'],$n+1);
            }
        }
    }
    function addtype(){
        $db=new db('type');
        $this->gettrree($db);
        $this->s->assign('str',$this->str);
        $this->s->display('admin/addtype.html');
    }

    function add(){
        $pid=$_REQUEST['pid'];
        $title=$_REQUEST['title'];
        $durl=$_REQUEST['durl'];
        $english=$_REQUEST['english'];
        $descs=$_REQUEST['descs'];//数据库里没有添加
        $arr=$_FILES['image'];
//        var_dump($pid);
//        var_dump($title);
//        var_dump($english);
//        var_dump($arr);
//        exit;
        $type=['image/png','image/gif','image/jpeg'];//规定图片格式
        $size=1024*1024*1;//规定图片大小
        $t=$arr['type'];//arr的type属性数组赋值给$t；
        foreach ($t as $item){//挑选合适的文件格式

            if(!(in_array($item,$type))){
                $this->jump('请输入正确的图片格式','index.php?m=admin&f=type&a=addtype');
                exit;
            }
        }
        $f=$arr['size'];//arr的size属性数组赋值给$f；
        foreach ($f as $item){//挑选合适的文件大小
            if($item>$size){
                $this->jump('请选择合适的图片大小','index.php?m=admin&f=type&a=addtype');
                exit;
            }
        }




//给存储的图片起一个名字
        $path='upload';
//创建文件夹
        if(!is_dir($path)){//如果不存在$path
            mkdir($path);  //创建，$path；权限0777;
        }
        $n=$arr['name'];//arr的name属性数组赋值给$n；
        $img='';
        foreach ($n as $key=>$item){
            $d=explode('.',$item)[1];//把name值按照.分割为数组;取到文件类型，jpg；
            $name=microtime(true).'.'.$d;  //设置文件名为时间。图片类型；
            //    var_dump($arr['tmp_name'][$key]);   tmp_name 临时存在tmp文件夹内的文件和临时文件名

            if(is_uploaded_file($arr['tmp_name'][$key])){ //如果存在临时文件
                move_uploaded_file($arr['tmp_name'][$key],$path.'/'.$name);
                //move_uploaded_file 第一个从参数文件，第二个路径，第三个名字0
                //将$arr['tmp_name'][$key]移动到$path文件下，文件名为$name
//                $img.=substr($url,0,strrpos($url,'/')).'/'.$path.'/'.$name.'--';
                $img.=WEB_PATH.'/'.$path.'/'.$name.'--';

            }
        }
        $img=rtrim($img,'--');//去除最后一个"--";


        $db=new db('type');

        if($pid==0){
            $row=$db->add('title,durl,pid,img,english',"'$title','$durl',0,'$img','$english'");

        }else{
            $row=$db->add('title,durl,pid,img,english',"'$title','$durl',$pid,'$img','$english'");
        }



        if($row==1){
            $this->jump('提交成功','index.php?m=admin&f=type&a=addtype');
        }
        else{
            $this->jump('提交失败','index.php?m=admin&f=type&a=addtype');
        }
    }
    function deltype(){
        $id=$_REQUEST['id'];
        $db=new db('type');
        $row=$db->del("id=$id");
        if ($row==1){
            $this->jump('删除成功','index.php?m=admin&f=type');
        }else{
            $this->jump('删除失败','index.php?m=admin&f=type');
        }
    }
    function updatetype(){
        $id=$_REQUEST['id'];
        $db=new db('type');
        $result=$db->selOne("*","id=$id");
        $pid=$result['pid'];
        $this->gettrree($db,0,0,$pid);
        $this->s->assign("str",$this->str);
        $this->s->assign("title",$result['title']);
        $this->s->assign("english",$result['english']);
        $this->s->assign("id",$result['id']);
//        $this->s->assign("id",$result['id']);
        $this->s->display('admin/updatetype.html');

    }

    function recompose(){

        $id=$_REQUEST['id'];
        $title=$_REQUEST['title'];
        $pid=$_REQUEST['pid'];
        $english=$_REQUEST['english'];
        $descs=$_REQUEST['descs'];


        $arr=$_FILES['image'];

        $type=['image/png','image/gif','image/jpeg'];//规定图片格式
        $size=1024*1024*1;//规定图片大小
        $t=$arr['type'];//arr的type属性数组赋值给$t；
        foreach ($t as $item){//挑选合适的文件格式

            if(!(in_array($item,$type))){
                $this->jump('请输入正确的图片格式','index.php?m=admin&f=category&a=addcategory');
                exit;
            }
        }
        $f=$arr['size'];//arr的size属性数组赋值给$f；
        foreach ($f as $item){//挑选合适的文件大小
            if($item>$size){
                $this->jump('请选择合适的图片大小','index.php?m=admin&f=category&a=addcategory');
                exit;
            }
        }




//给存储的图片起一个名字
        $path='upload';
//创建文件夹
        if(!is_dir($path)){//如果不存在$path
            mkdir($path);  //创建，$path；权限0777;
        }
        $n=$arr['name'];//arr的name属性数组赋值给$n；
        $img='';
        foreach ($n as $key=>$item){
            $d=explode('.',$item)[1];//把name值按照.分割为数组;取到文件类型，jpg；
            $name=microtime(true).'.'.$d;  //设置文件名为时间。图片类型；
            //    var_dump($arr['tmp_name'][$key]);   tmp_name 临时存在tmp文件夹内的文件和临时文件名

            if(is_uploaded_file($arr['tmp_name'][$key])){ //如果存在临时文件
                move_uploaded_file($arr['tmp_name'][$key],$path.'/'.$name);
                //move_uploaded_file 第一个从参数文件，第二个路径，第三个名字0
                //将$arr['tmp_name'][$key]移动到$path文件下，文件名为$name
//                $img.=substr($url,0,strrpos($url,'/')).'/'.$path.'/'.$name.'--';
                $img.=WEB_PATH.'/'.$path.'/'.$name.'--';

            }
        }
        $img=rtrim($img,'--');//去除最后一个"--";




        $db=new db('type');
        if($pid==0){
            $row=$db->update("title='{$title}',img='{$img}',pid=0,english='{$english}'","id={$id}");

        }else{
            $row=$db->update("title='{$title}',img='{$img}',pid={$pid},english='{$english}'","id={$id}");
        }

        if($row==1){
            $this->jump('修改成功','index.php?m=admin&f=type');
        }else{
            $this->jump('修改失败','javascript:history.back(-1)');


        }
    }

}