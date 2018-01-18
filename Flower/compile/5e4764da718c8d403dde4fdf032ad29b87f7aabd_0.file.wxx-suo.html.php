<?php
/* Smarty version 3.1.30, created on 2018-01-18 09:19:27
  from "D:\Desktop\www\Flower\template\index\wxx-suo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a60669f08b8e9_51184646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e4764da718c8d403dde4fdf032ad29b87f7aabd' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\wxx-suo.html',
      1 => 1516267165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a60669f08b8e9_51184646 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wxx-suo.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font1/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font2/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font3/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
nine.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <title>解锁</title>
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
        #canvas{
            width:100%;
            height: 100%;
            display: block;
        }
        .title{
            font-size: 0.12rem;
            text-align: center;
            display: block;
            width:100%;
            position: absolute;
            top: 0;
        }
        #updatePassword{
            display: none;
        }
    </style>
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
                </div>
                <div class="main">
                    <?php echo '<script'; ?>
>
                        new H5lock({
                            chooseType: 3
                        }).init();
                    <?php echo '</script'; ?>
>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
