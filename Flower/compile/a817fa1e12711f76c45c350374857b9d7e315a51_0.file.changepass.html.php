<?php
/* Smarty version 3.1.30, created on 2018-01-23 09:53:56
  from "E:\wamp64\www\Flower\template\index\changepass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6706346631a6_04393692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a817fa1e12711f76c45c350374857b9d7e315a51' => 
    array (
      0 => 'E:\\wamp64\\www\\Flower\\template\\index\\changepass.html',
      1 => 1516686218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6706346631a6_04393692 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <title>修改密码</title>
</head>
<style>
    .form-control{
        height: 40px;
        background:#afeac0;
        margin: 0 auto;
        width: 90%;

    }
    .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
        cursor: not-allowed;
        background:#afeac0;
        opacity: 1;
    }
    label{
        margin-left: .3rem;
    }
</style>
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
    <form action="index.php?m=index&a=changepassword" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">用户名</label>
            <input type="user" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">旧密码</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">新密码</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="NewPassword" name="newPassword">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword3">确认新密码</label>
            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="nPassword">
        </div>
        <label for="exampleInputPassword3"><?php echo $_smarty_tpl->tpl_vars['zi']->value;?>
</label>
        <button type="submit" class="btn btn-default">确认修改</button>
    </form>
</div>
</body>
</html><?php }
}
