<?php
/* Smarty version 3.1.30, created on 2018-01-24 06:08:02
  from "F:\wamp64\www\Flower\template\index\sign-in.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6822c2785a38_77639398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e070ce01dabf0cc88fe6b36a22c0fb934ce9d7' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\sign-in.html',
      1 => 1516774081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6822c2785a38_77639398 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
sign-in.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font1/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font2/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font3/iconfont.css">
    <!--<link rel="stylesheet" href="<?php echo FONT_PATH;?>
font8/iconfont.css">-->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js">
    <?php echo '</script'; ?>
>
    <style>
        .submit{
            display: block;
            margin: 0 auto;
            width:70px;
            height:35px;
            border-radius:50px 50px 0 0;
            background: #1AA22A;
            border: none;
            margin-top: 0.3rem;
            color: #fff;
            font-size: 0.4rem;
            text-align: center;
            font-family: "宋体";
            line-height:35px;
        }
        .showa{
            position: absolute;
            top:0.4rem;
            left: 0px;
            right:0px;
            margin-left: auto;
            margin-right: auto;
            background: #000;
            color: #ffffff;
            width:3rem;
            height: 1rem;
            line-height: 1rem;
            text-align: center;
            border-radius: 0.1rem;
            display: none;
            opacity: 0.8;
        }
    </style>
    <title>登录页</title>
</head>
<body>
    <!--开始-->
    <div class="banner">
        <!--背景图-->
        <img src="<?php echo IMG_PATH;?>
sign-in.png" alt="">
        <!--二层背景-->
        <div class="ec">
            <!--上部-->
            <div class="top">
                <div class="top1">
                    <img src="<?php echo IMG_PATH;?>
sign-in1.png" alt="">
                </div>
                <div class="hua">
                    <img src="<?php echo IMG_PATH;?>
sign-in2.png" alt="">
                </div>
                <div class="huahui">花卉志</div>
                <p class="huahuiy">FLOWERS AND PLANTS</p>
            </div>
            <!--下部-->
            <div class="bottom">
                <div class="b1">
                    <div class="b1z">
                        <div class="b1z1"></div>
                        <div class="b1z2"></div>
                    </div>
                    <a href="index.php?a=register" class="b1y">用户注册<i class="iconfont icon-gengduo"></i></a>
                </div>
                <!--表单-->
                <div class="main">
                    <form style="position: relative" id="vlform" autocomplete="off">
                        <div class="username">
                            <label for="user"></label>
                            <input type="text" id="user" name="user" value="" placeholder="请输入用户名">
                        </div>
                        <div class="username password">
                            <label for="pass"></label>
                            <input type="text" id="pass" name="pass" value="" placeholder="请输入密码">
                        </div>
                        <a >
                            <button type="submit" class="submit"> > </button>
                        </a>
                        <div class="showa"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    #user-error,#pass-error,#agpass-error{
        position: absolute;
        right: 0;
        top:0px;
        color:red;
        text-align: right;
        line-height: 1.05rem;
        margin-right: 0.3rem;
    }
    .username{
        position: relative;
    }
</style>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        $("#vlform").validate({
            rules:{
                user:{
                    required:true
                },
                pass:{
                    required:true
                }
            },messages:{
                    user:{
                        required:"请输入账号!"
                    },
                    pass:{
                        required:"请输入密码!"
                    }
                },submitHandler(){
                    $.ajax({
                        url:'index.php?a=wx_chackpass',
                        type:'post',
                        data:$("#vlform").serialize(),
                        success:function (res) {
                            if(res=='ok') {
                                $(".showa").html('登录成功!').slideDown(500).delay(1000).slideUp(500,function () {
                                    location.href="index.php";
                                });
                            }
                            if(res=='no'){
                                $(".showa").html('密码错误!').slideDown(500).delay(1000).slideUp(500);

                            }
                            if(res=="sorry"){
                                $(".showa").html('账号不存在!').slideDown(500).delay(1000).slideUp(500);
                            }
                        }
                    })
                }
        })
    })
<?php echo '</script'; ?>
><?php }
}
