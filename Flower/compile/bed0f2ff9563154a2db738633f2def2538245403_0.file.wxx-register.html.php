<?php
/* Smarty version 3.1.30, created on 2018-01-18 09:37:32
  from "D:\Desktop\www\Flower\template\index\wxx-register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a606adccd9db8_86532088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bed0f2ff9563154a2db738633f2def2538245403' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\wxx-register.html',
      1 => 1516268115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a606adccd9db8_86532088 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a class="b1y">快速登录<i class="iconfont icon-gengduo"></i></a>
                </div>
                <div class="main">
                    <form action="">
                        <div class="username">
                            <input type="text" placeholder="请输入用户名">
                        </div>
                        <div class="username password">
                            <input type="text" placeholder="请输入密码">
                        </div>
                        <div class="username agapass">
                            <input type="text" placeholder="请确认密码">
                        </div>
                        <a href="index.php?a=award">
                            <input type="" class="submit" value="立即注册">
                        </a>



                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
