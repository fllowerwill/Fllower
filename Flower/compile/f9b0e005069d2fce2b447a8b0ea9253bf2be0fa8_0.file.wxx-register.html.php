<?php
/* Smarty version 3.1.30, created on 2018-01-24 06:07:28
  from "F:\wamp64\www\Flower\template\index\wxx-register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6822a02da4d4_30136570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9b0e005069d2fce2b447a8b0ea9253bf2be0fa8' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\wxx-register.html',
      1 => 1516774021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6822a02da4d4_30136570 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wxx-register.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font1/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font2/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font3/iconfont.css">
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
jquery.validate.min.js"><?php echo '</script'; ?>
>
    <title>注册页</title>
    <style>
        .form-horizontal{
            width: 86%;
            margin: 0 auto;
        }
        .icon-shuyec{
            font-size: 0.32rem;
            color: greenyellow;
        }
        .btn-default{
            display: block;
            margin: 0 auto;
        }
        .form-group{
            margin-bottom:  10px;
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
        input{
            display: block;
        }
    </style>
    <title>登录注册</title>
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
                    <a href="index.php?a=sign" class="b1y">快速登录<i class="iconfont icon-gengduo"></i></a>
                </div>
                <div class="main">
                    <form  id="vlform" style="position: relative" autocomplete="off">
                        <div class="username">
                            <label for="user"></label>
                            <input type="text" id='user' name="user"  placeholder="请输入用户名">
                        </div>
                        <div class="username password">
                            <label for="pass"></label>
                            <input type="password" id="pass" name="pass"  placeholder="请输入密码">
                        </div>
                        <div class="username agapass">
                            <input type="password" name="agpass" placeholder="请确认密码">
                        </div>
                        <a  class="zhuce">
                            <button type="submit" class="submit">提交</button>
                        </a>
                        <div class="showa"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
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
                    required:true,
                    minlength:6
                },
                agpass:{
                    required:true,
                    minlength:6,
                    equalTo:"#pass"
                }
            },messages:{
                user:{
                  required:"请输入用户名",
                },
                pass:{
                    required:'请输入密码！',
                    minlength:'密码长度至少为6位！'
                },
                agpass:{
                    required:'请再次输入密码！',
                    minlength:'密码长度至少为6位！',
                    equalTo:'两次输入不一致，请重新输入！'
                }
            },submitHandler(){
                $.ajax({
                    url:"index.php?a=wx_zhuce",
                    type:'post',
                    data:$("#vlform").serialize(),
                    success:function (res) {
                        if(res=="no"){
                            $(".showa").html('账号已存在!').slideDown(500).delay(1000).slideUp(500);
                        }
                        if(res=="ok"){
                            $(".showa").html('注册成功').slideDown(500).delay(1000).slideUp(500,function () {
                                location.href="index.php?a=award";
                            })
                        }
                    }
                })
            }
        })
    })
<?php echo '</script'; ?>
>
<?php }
}
