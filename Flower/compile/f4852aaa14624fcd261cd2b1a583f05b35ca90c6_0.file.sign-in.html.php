<?php
/* Smarty version 3.1.30, created on 2018-01-18 09:33:10
  from "D:\Desktop\www\Flower\template\index\sign-in.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6069d6bb2e12_85940681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4852aaa14624fcd261cd2b1a583f05b35ca90c6' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\sign-in.html',
      1 => 1516267987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6069d6bb2e12_85940681 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font8/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
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
                    <a class="b1y">更多 <i class="iconfont icon-gengduo"></i></a>
                </div>
                <!--表单-->
                <div class="main">
                    <form action="">
                        <div class="username">
                            <input type="text" placeholder="请输入用户名">
                        </div>
                        <div class="username password">
                            <input type="text" placeholder="请输入密码">
                        </div>
                        <a href="index.php?a=lock">
                            <input type="" class="submit" value=">">
                        </a>

                    </form>
                </div>
                <div class="b2">第三方登录</div>
                <ul>
                    <li>
                        <i class="iconfont icon-qq"></i>
                    </li>
                    <li>
                        <i class="iconfont icon-weixin"></i>
                    </li>
                    <li>
                        <i class="iconfont icon-weibo"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
