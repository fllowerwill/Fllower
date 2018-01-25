<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22
 * Time: 11:34
 */

class content extends admin
{
    public $btr='';
    public $str='';
    function init(){
        $db=new db('content');
        $this->gettable($db);
        $this->s->assign('btr',$this->btr);
        $this->s->display('admin/contentshow.html');

    }
    function gettable($d,$id=0,$n=0){
        $brr=$d->selAll();

        if($brr){
            foreach($brr as $item){



//                $a=substr("{$item['content']}", strpos("{$item['content']}",'src'),strpos("{$item['content']}",' alt')-strpos("{$item['content']}",'/company'));
//                $b=substr($a,strpos($a,'/com'));
                $this->btr.="
                 <tr class=\"danger\">

                                            <td>{$item['type']}</td>
                                            <td>{$item['name']}</td>
                                            <td>
                                                <img src='{$item['img1']}' alt=''>
                                            </td>
                                            <td>
                                                <img src='{$item['img2']}' alt=''>
                                            </td>
                                            <td>
                                                <img src='{$item['img3']}' alt=''>
                                            </td>
                                            <td>{$item['temp']}</td>
                                            <td>{$item['humi']}</td>
                                            <td>{$item['light']}</td>
                                            <td>{$item['reco']}</td>
                                            <td>
                                                <textarea name='' readonly>{$item['descs']}</textarea>
                                            </td>
                                            <td>
                                                <textarea name='' readonly>{$item['recomm']}</textarea>
                                            </td>
                                            <td>
                                                <textarea name='' readonly>{$item['says']}</textarea>
                                            </td>
                                            <td>{$item['likes']}</td>
                                            <td>{$item['share']}</td>
                                            <td>{$item['cid']}</td>
                                            <td>{$item['coll']}</td>
                                            <td>{$item['dis']}</td>
                                            <td>{$item['english']}</td>
                                            <td>{$item['time']}</td>
                                            <td>
                                                <a href='index.php?m=admin&f=content&a=delcontent&id={$item['id']}'><button type='button' class='btn btn-danger'>删除</button></a>
                                                <a href='index.php?m=admin&f=content&a=update&id={$item['id']}'><button type='button' class='btn btn-info'>修改</button></a>
                                            </td>

                                        </tr>
                ";

            }
        }
    }
    function addcontent(){
        $db=new db('type');
        $this->gettrree($db);
        $this->s->assign('str',$this->str);
        $this->s->display('admin/addcontent.html');
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
    function getcontent(){
        $type=$_REQUEST['type'];
        $name=$_REQUEST['name'];
        $english=$_REQUEST['english'];
        $humi=$_REQUEST['humi'];
        $light=$_REQUEST['light'];
        $temp=$_REQUEST['temp'];
        $reco=$_REQUEST['reco'];
        $cid=$_REQUEST['cid'];
        $image1=$_FILES['image1'];
        $image2=$_FILES['image2'];
        $image3=$_FILES['image3'];
        $descs=$_REQUEST['descs'];
        $recomm=$_REQUEST['recomm'];
        $says=$_REQUEST['says'];
        $dis=$_REQUEST['dis'];
        $likes=0;
        $share=0;
        $coll=0;

//        var_dump($type);
//        var_dump($name);
//        var_dump($english);
//        var_dump($humi);
//        var_dump($light);
//        var_dump($temp);
//        var_dump($reco);
//        var_dump($recomm);
//        var_dump($descs);
//        var_dump($says);
//        var_dump($dis);
//        var_dump($cid);
//        var_dump($image1);
//        var_dump($image2);
//        var_dump($image3);
       $img1=$this->image($image1);
       $img2=$this->image($image2);
       $img3=$this->image($image3);

//        var_dump($this->image($image2));
//        var_dump($this->image($image3));


        $db=new db('content');
        $row=$db->add('type,name,img1,img2,img3,temp,humi,light,reco,descs,recomm,says,likes,share,cid,coll,dis,english',"'$type','$name','$img1','$img2','$img3','$temp','$humi','$light','$reco','$descs','$recomm','$says',$likes,$share,$cid,$coll,'$dis','$english'");


        if($row==1){
            $this->jump('添加成功','index.php?m=admin&f=content');
        }
        else{

            $this->jump('添加失败','index.php?m=admin&f=content');
        }


    }
    function image($arr){
        $type=['image/png','image/gif','image/jpeg'];//规定图片格式
        $size=1024*1024*1;//规定图片大小
        $t=$arr['type'];//arr的type属性数组赋值给$t；
        foreach ($t as $item){//挑选合适的文件格式

            if(!(in_array($item,$type))){
                $this->jump('请输入正确的图片格式','index.php?m=admin&f=content&a=addcontent');
                exit;
            }
        }
        $f=$arr['size'];//arr的size属性数组赋值给$f；
        foreach ($f as $item){//挑选合适的文件大小
            if($item>$size){
                $this->jump('请选择合适的图片大小','index.php?m=admin&f=content&a=addcontent');
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
        return $img;
    }
    function delcontent(){
        $id=$_REQUEST['id'];

        $db=new db('content');
        $result=$db->del("id=$id");
        if($result==1){
            $this->jump('删除成功','index.php?m=admin&f=content');
        }

        else{
            $this->jump('删除失败','index.php?m=admin&f=content');
        }
    }

    function update(){
        $id=$_REQUEST['id'];
        $db=new db('content');
        $result=$db->selOne("*","id=$id");

        $this->s->assign("id",$result['id']);
        $this->s->assign("name",$result['name']);
        $this->s->assign("temp",$result['temp']);
        $this->s->assign("humi",$result['humi']);
        $this->s->assign("light",$result['light']);
        $this->s->assign("reco",$result['reco']);
        $this->s->assign("descs",$result['descs']);
        $this->s->assign("recomm",$result['recomm']);
        $this->s->assign("says",$result['says']);
        $this->s->assign("likes",$result['likes']);
        $this->s->assign("share",$result['share']);
//        $this->s->assign("cid",$result['cid']);
        $this->s->assign("coll",$result['coll']);
        $this->s->assign("dis",$result['dis']);
        $this->s->assign("english",$result['english']);
        $this->s->display('admin/updatecontent.html');
    }

    function updatecontent(){
        $id=$_REQUEST['id'];
        $type=$_REQUEST['type'];
        $name=$_REQUEST['name'];
        $english=$_REQUEST['english'];
        $humi=$_REQUEST['humi'];
        $light=$_REQUEST['light'];
        $temp=$_REQUEST['temp'];
        $reco=$_REQUEST['reco'];
        $image1=$_FILES['image1'];
        $image2=$_FILES['image2'];
        $image3=$_FILES['image3'];
        $descs=$_REQUEST['descs'];
        $recomm=$_REQUEST['recomm'];
        $says=$_REQUEST['says'];


        $img1=$this->image($image1);
        $img2=$this->image($image2);
        $img3=$this->image($image3);


//        var_dump($id);
//        var_dump($type);
//        var_dump($name);
//        var_dump($english);
//        var_dump($humi);
//        var_dump($light);
//        var_dump($temp);
//        var_dump($reco);
//        var_dump($recomm);
//        var_dump($descs);
//        var_dump($says);
//        var_dump($dis);
//        var_dump($cid);
//        var_dump($img1);
//        var_dump($img2);
//        var_dump($img3);



        $db=new db('content');
        $row=$db->update("type='{$type}',name='{$name}',img1='{$img1}',img2='{$img2}',img3='{$img3}',temp='{$temp}',humi='{$humi}',light='{$light}',reco='{$reco}',descs='{$descs}',recomm='{$recomm}',says='{$says}',english='{$english}'","id='$id'");

        if($row==1){
            $this->jump('修改成功','index.php?m=admin&f=content');
        }
        else{
            $this->jump('修改失败','javascript:history.back(-1)');
        }
    }

}