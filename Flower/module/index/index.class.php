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

        $this->mrratte();
        $this->mrrrecomm();
        $sec=new session();
        $name=$sec->got('user');
        $this->s->assign('name',$name);
        $db=new db('user');
        $row=$db->selOne('*',"name='$name'");
        $this->s->assign('row',$row);
        $this->s->display('index/hfy_index.html');

    }
    function sign(){
        $this->s->display('index/sign-in.html');
    }
    function mrratte(){
        $db=new db('content');
        $arr=$db->selAll("*","id<10 order by likes desc limit 3");
        $this->s->assign('arr',$arr);
    }
    function mrrrecomm(){
        $db=new db('content');
        $brr=$db->selAll("*","id<10 order by share desc limit 1");
        $this->s->assign("brr",$brr);
    }
    function doctor()
    {
        $sec=new session();
        $name=$sec->got('user');
        $db=new db("user");
        $arr=$db->selAll("*");
        $this->s->assign('arr',$arr);
        $db1=new db('flwerans');
        $db2=new db('answer');
        $a=array();
        foreach ($arr as $item){
            $brr=$db1->selAll("*","pid={$item['id']}");
            $item['question']=$brr;
            array_push($a,$item);
        }
        $b=array();
        foreach ($a as $i) {
            foreach ($i['question'] as $s){
                $crr=$db2->selAll("*","pid={$s['id']}");
                $s['answer']=$crr;
                array_push($b,$s);
            }
        }

        $this->s->assign('arr',$a);
        $this->s->assign('brr',$b);
        $this->s->display('index/mls_index.html');

    }

    function doctor2()
    {
        $sec=new session();
        $name=$sec->got('user');
        $db=new db("user");
        $arr=$db->selAll("*","name='$name'");
        $this->s->assign('arr',$arr);
        $db1=new db('flwerans');
        $db2=new db('answer');
        $a=array();
        foreach ($arr as $item){
            $brr=$db1->selAll("*","pid={$item['id']}");
            $crr=$db2->selAll("*","pid={$item['id']}");
            $item['question']=$brr;
            $item['answer']=$crr;
            array_push($a,$item);
        }
        $this->s->assign('arr',$a);
        $this->s->display('index/doctor.html');
    }
    function wxanswer(){
        $this->s->display('index/question.html');
    }
    function wx_answer(){
        $qusetion=$_POST['question'];
        $dis=$_POST['dis'];
        $sec=new session();
        $name=$sec->got('user');
        $db=new db('user');
        $id=$db->selOne('id',"name='$name'")['id'];
        $db->close();
        $db=new db('flwerans');
        $row=$db->add("name,question,pid","'$name','$dis','$id'");
        if($row){
            echo 'ok';
        }else{
            echo 'no';
        }
    }
    function around()
    {
        $db=new db("round");
        $arr= $db->selAll("*");
        $this->s->assign("arr",$arr);
        $this->s->display('index/around.html');

    }
    function aroundshop()
    {
    $dbs=new db('aroundshop');
    $arr=$dbs->selAll('*',"type=0 order by dis desc limit 6");
//    var_dump($arr);
    $list=array();
    foreach ($arr as $v){
//        var_dump($v['id']);
        $main=new db('content');
        $main=$main->selAll("*","dis={$v['id']}");
        $v['next']=$main;
        array_push($list,$v);
//        var_dump($v);
//        exit();
    }
    $this->s->assign('arr',$list);
//        var_dump($list);
//        exit();
    $this->s->display('index/aroundshop.html');
    }
    function mrrPre()
    {
        $sec=new session();
        $name=$sec->got('user');
        $db=new db('user');
        $row=$db->selOne('*',"name='$name'");
        $this->s->assign('row',$row);
        $db->close();
        $dbs=new db('content');
        $arr=$dbs->selOne('*',"");
        $this->s->assign('arr',$arr);
//        var_dump($arr);
//        exit;
        $this->s->display('index/mrrPre.html');
    }


    function shoucang()
    {
        $db=new db('content');
        $t=$db->selOne('*',"cid=4");
//        var_dump($t);
//        exit;
        $this->s->assign('t',$t);

        $ts=$db->selOne('*',"cid=1");
//        var_dump($ts);
//        exit;
        $this->s->assign('ts',$ts);
        $row=$db->selAll('*',"cid=4 order by likes desc limit 5");
//        var_dump($row);
//        exit;
        $this->s->assign('row',$row);
        $db->close();
        $dbs=new db('content');
        $arr=$dbs->selAll('*',"type=1 order by share limit 4");
        $this->s->assign('arr',$arr);
//        var_dump($arr);
//        exit;
        $this->s->display('index/hfy_shop_list.html');

    }


    function zjrz()
    {
        $sec=new session();
        $user=$sec->got('user');
        $db=new db('user');
        $res=$db->selOne("*","name='$user'")['name'];
        $db->close();
        $db=new db('user');
        $agr=$db->selOne("*","name='$user'")['agree'];
        $img=$db->selOne("*","name='$user'")['img'];
        $this->s->assign('img',$img);
        $this->s->assign('name',$res);
        $yz="/^1[358][0-9]{9}$/";
        $this->s->assign('yz',$yz);
        if($agr=='now'){
            $this->s->display("index/wx-zjrz-now.html");
        }if($agr=='false'){
        $this->s->display('index/wx-zjrz-1.html');
    }
        if($agr=='true'){
            $this->s->display('index/wx-zjrz-1.html');
        }
    }
    function zjrz2()
    {
        $this->s->display('index/wx-zjrz-2.html');
    }
    function zjrznow(){
        $this->s->display("index/wx-ajrz-now.hmtl");
    }
    function integral()
    {
        $id=2;
        $db=new db('user');
        $arr=$db->selOne('*',"id=$id");
//        var_dump($arr);
//        exit;
        $this->s->assign('arr',$arr);
        $db->close();
        $dbs=new db('content');
        $brr=$dbs->selAll('*','type=0 order by share limit 4');
//        var_dump($brr);
//        exit;
        $this->s->assign('brr',$brr);
        $dbs->close();
        $d=new db('content');
        $crr=$d->selAll('*','type=1 order by share limit 2');
//        var_dump($brr);
//        exit;
        $this->s->assign('crr',$crr);
//        $this->fen();
        $this->s->display('index/integral.html');

    }

    function fen(){
        $id=2;
        $fen=$_GET['fen'];
        $db=new db('user');
        $jf=$db->update("jifen=$fen","id=$id");
        if($jf==1){
            echo $fen;
        }else{
            echo 'no';
        }
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

    //分类页面
    function type()
    {
////        链接数据库
        $db=new db('type');
        $row=$db->selAll("*","id<4");
        $crr=array();
        foreach ($row as $v){
            $a=$db->selAll("*","pid={$v['id']}");
            $v['con']=$a;
            array_push($crr,$v);
        }

////        挂载数据
        $this->s->assign('row',$row);
        $this->s->assign('crr',$crr);
//
//        链接页面
        $this->s->display('index/type.html');

    }
//分类列表页
    function typelist()
    {
        $db=new db('type');
        $id=$_REQUEST['id'];
        $row=$db->selOne("*","id=$id");
        $this->s->assign('r',$row);

        $d=new db('content');

        $t=$d->selAll("*","cid=$id and type=0");
        $f=$d->selAll("*","cid=$id and type=1");


        $this->s->assign('t',$t);
        $this->s->assign('f',$f);

//  链接页面
        $this->s->display('index/typelist.html');

    }
//详情页
    function content()
    {
        $this->mrrcont();
        $this->s->display('index/flower-content.html');
    }
    function mrrcont(){
        $db=new db('content');
        $id=$_REQUEST['id'];
        $arr=$db->selOne("*","id=$id");
        $this->s->assign("arr",$arr);
        $db->close();
        $tui=new db('content');
        $brr=$tui->selAll("*","type=1 order by reco desc limit 5");
        $this->s->assign("brr",$brr);
    }

    function changepass()
    {
        $sec=new session();
        $name=$sec->got('user');
        $db=new db('user');
        $arr=$db->selOne('*',"name='$name'");
        $this->s->assign('arr',$arr);
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
    function wx_zhuce(){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $db=new db('user');
        $row= $db->add("name,password,jifen","'$user','$pass',100");
        if($row){
            echo 'ok';
        }else{
            echo 'no';
        }
    }
    function lock()
    {
        $this->s->display('index/wxx-suo.html');

    }
    function signin()
    {
        $this->s->display('index/sign-in.html');

    }
    function wx_chackpass(){
        $sec=new session();
        $pass=$_POST['pass'];
        $name=$_POST['user'];
        $db=new db("user");
        $row=$db->selOne("*","name='$name'");
        if($row){
            if($row['password']==$pass){
                $sec->set('user',$name);
                echo 'ok';
            }else{
                echo "no";
            }
        }else{
            echo "sorry";
        }
    }
    function award(){
        $this->s->display('index/coupon.html');

    }
    function wx_exit(){
        $sec=new session();
        $sec->del('user');
        echo "ok";
    }
    function wx_photo(){
        date_default_timezone_set('Asia/Shanghai');
        $user=$_POST['user'];
        $sex=$_POST['sex'];
        $bir=$_POST['bir'];
        $phone=$_POST['phone'];
        $db=new db('user');
        $arr=$_FILES['picfil'];
        if($arr['size']==0){
            $result=$db->selOne('img',"name='$user'");
            $img=$result['img'];
        }else{
            $arr=$_FILES['picfil'];
            $type=['image/png','image/gif','image/jpeg'];
            $size=20000*20000;
            $path='uplode';
            $t=$arr['type'];//接收过来图片的类型
            if(!in_array($t,$type)){
                echo '图片格式不正确，请重新上传';
                exit;
            }

            $s=$arr['size'];//接收过来的图片大小
            if($s>$size){
                echo '图片太大，请重新上传';
                exit;
            }
            if(!is_dir($path)){
                mkdir($path);
            }
            $n=$arr['name'];
            $img='';

            $name=microtime(true).'.'.$n;
            if(is_uploaded_file($arr['tmp_name'])){
                move_uploaded_file($arr['tmp_name'],$path.'/'.$name);
                $img.=WEB_PATH.'/'.$path.'/'.$name;
            }
            $row=$db->update("sex='$sex',tel='$phone',brithday='$bir',img='$img'","name='$user'");
            if($row){
                $this->s->display('index/wx-zjrz-2.html');
            }else{
                echo 'no';
            }
        }
    }
    function wx_xq(){
        $sec=new session();
        $name=$sec->got('user');
        $zy=$_POST['zy'];
        $com=$_POST['com'];
        $zs=$_POST['zs'];
        $email=$_POST['email'];
        $pj=$_POST['pj'];
        $db=new db('user');
        $row=$db->update("zhiye='$zs',gongsi='$com',zhengshu='$zs',email='$email',pingjia='$pj'","name='$name'");
        if($row){
            echo 'ok';
        }else{
            echo 'no';
        }
    }
    function wx_pass(){
        $user=$_POST['user'];
        $oldpass=$_POST['oldpass'];
        $newpass=$_POST['newpass'];
        $db=new db('user');
        $row=$db->selOne('*',"name='$user'")['password'];
        if($row!=$oldpass){
            echo 'error';
        }else{
            if($newpass==$row){
                echo 'again';
            }else{
                $result= $db->update("password='$newpass'","name='$user'");
                if($result){
                    echo 'ok';
                }else{
                    echo 'no';
                }
            }

        }
    }
}