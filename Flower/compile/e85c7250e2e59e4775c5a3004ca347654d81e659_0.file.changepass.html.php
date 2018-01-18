<?php
/* Smarty version 3.1.30, created on 2018-01-18 08:52:14
  from "D:\Desktop\www\Flower\template\index\changepass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a60603eb8b159_11506147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85c7250e2e59e4775c5a3004ca347654d81e659' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\changepass.html',
      1 => 1516265458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a60603eb8b159_11506147 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
changepass.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <title>修改密码</title>
</head>
<body>
<header>
    <img src="<?php echo IMG_PATH;?>
ye.png" alt="">
    <div class="banner-box">
        <div class="banner-top">
            <a class="return" href="index.php?a=mrrPre"><img src="<?php echo IMG_PATH;?>
return.png"  alt=""></a>
            <div class="tx">
                <div>
                    <div class="cir1"></div>
                    <div class="cir2"></div>
                    <div class="cir3"></div>
                    <div class="cir4">
                        <img src="<?php echo IMG_PATH;?>
tx7.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="name-box">
                <div class="name">
                    <div>Hello Kitty</div>
                    <div>A women,you can solowly go away</div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main">
    <form action="" class="bd">
        <input type="text" class="biaoti" placeholder="用户名">
        <input type="text" class="biaoti" placeholder="请输入旧密码">
        <input type="text" class="biaoti" placeholder="请输入新密码">
        <input type="text" class="biaoti" placeholder="请再次输入新密码">
        <button>确认</button>
    </form>
</div>
</body>
</html><?php }
}
