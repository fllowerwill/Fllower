<?php
/* Smarty version 3.1.30, created on 2018-01-24 09:41:56
  from "F:\wamp64\www\Flower\template\index\changepass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6854e4110b89_67008099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '847bb2a5a5bb0f3fa5a78084c5465827694d372c' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\changepass.html',
      1 => 1516777342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6854e4110b89_67008099 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
    <title>修改密码</title>
</head>
<body>
<style>
    header{
        background: url("<?php echo IMG_PATH;?>
mrr1.png") no-repeat center center;
        background-size:100% 100%;
    }
    .showa{
        position: absolute;
        top:0;
        left:0;
        right: 0;
        margin-right: auto;
        margin-left: auto;
        background: #000;
        color: #ffffff;
        width:3rem;
        height: 1rem;
        line-height: 1rem;
        text-align: center;
        border-radius: 0.1rem;
        display: none;
        opacity: 0.8;
        font-size: 0.35rem;
    }
    body{
        position: relative;
    }
</style>
<header>
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
                        <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['img'];?>
" alt="">
                    </div>
                </div>
            </div>
            <div class="name-box">
                <div class="name">
                    <div><?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
</div>
                    <div><?php echo $_smarty_tpl->tpl_vars['arr']->value['pingjia'];?>
</div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="main">
    <form action="" class="bd" id="vlform">
        <div>
            <label for="name"></label>
            <input type="text" id="name" name="user" class="biaoti" placeholder="用户名" readonly value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
">
        </div>
        <div>
            <label for="pass"></label>
            <input type="password" class="biaoti" id="pass" name="oldpass" placeholder="请输入旧密码">
        </div>
        <div>
            <label for="newpass"></label>
            <input type="password" class="biaoti" id="newpass" name="newpass" placeholder="请输入新密码">
            <section class="showa"></section>
        </div>
        <div>
            <label for="agpass"></label>
            <input type="password" class="biaoti" id="agpass" name="agpass" placeholder="请再次输入新密码">
        </div>
        <button>确认</button>
    </form>
</div>

</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        $("#vlform").validate({
            rules:{
                oldpass:{
                  required:true
                },
                newpass:{
                    required:true,
                    minlength:6
                },
                agpass:{
                    required:true,
                    equalTo:"#newpass"
                }
            },
            messages:{
                oldpass:{
                    required:'请输入旧密码'
                },
                newpass:{
                    required:'请输入新密码',
                    minlength:'最少输入6位 '
                },
                agpass:{
                    required:'请再次输入密码',
                    equalTo:'两次密码不一致',
                }
            },submitHandler(){
                $.ajax({
                    url:"index.php?a=wx_pass",
                    data:$("#vlform").serialize(),
                    type:'post',
                    success:function (data) {
                        if(data=='error'){
                            $(".showa").html('密码错误!').slideDown(500).delay(1000).slideUp(500);
                        }
                        if(data=='ok'){
                            $(".showa").html('修改成功!').slideDown(500).delay(1000).slideUp(500,function () {
                                location.href="index.php"
                            });
                        }
                        if(data=='again'){
                            $(".showa").html('密码相同!').slideDown(500).delay(1000).slideUp(500);
                        }
                    }
                })
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
