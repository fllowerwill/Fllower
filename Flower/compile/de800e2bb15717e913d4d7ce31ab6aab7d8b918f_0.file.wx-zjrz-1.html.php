<?php
/* Smarty version 3.1.30, created on 2018-01-24 06:32:27
  from "F:\wamp64\www\Flower\template\index\wx-zjrz-1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a68287b2be002_62645522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de800e2bb15717e913d4d7ce31ab6aab7d8b918f' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\wx-zjrz-1.html',
      1 => 1516775498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a68287b2be002_62645522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wx-专家认证-基本信息</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wx-zjrz-1.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
data.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
zepto.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
iscroll-zoom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
script.js"><?php echo '</script'; ?>
>
</head>
<style>
    .main>.photo>.bottom>.zp{
        width:1.34rem;
        height: 1.5rem;
        float: left;
        background: url("<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
") no-repeat center center;
        background-size: 100% 100%;
    }
    #sc{
        display: block;
        width:100%;
        height: 100%;
    }
    .addzp{
        background: url("<?php echo IMG_PATH;?>
add.jpg") no-repeat center center;
        background-size:80% auto;
    }

</style>
<body>
    <div class="cir"></div>
    <div class="rz-title">
        <a href="index.php?a=mrrPre" class="yjt"><img src="<?php echo IMG_PATH;?>
return.png" alt=""></a>
        <span>专家认证</span>
    </div>
    <div class="lc">
        <div class="lc-top">
            <div class="circle1">
                <div class="circle2">
                    <div class="circle3">
                        <div class="circle4"></div>
                    </div>
                </div>
            </div>
            <div class="xian"></div>
            <div class="circle11">
                <div class="circle2">
                    <div class="circle3">
                        <div class="circle4"></div>
                    </div>
                </div>
            </div>
            <div class="xian"></div>
            <div class="circle11">
                <div class="circle2">
                    <div class="circle3">
                        <div class="circle4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lc-botttom">
            <div class="word-box">
                <span>01.基本信息</span>
                <span>02.专业信息</span>
                <span>03.审核成功</span>
            </div>
        </div>
    </div>
    <div class="jbs"></div>
    <form id="vlform" enctype="multipart/form-data" method="post" action="index.php?a=wx_photo">
        <div class="main">
                <div class="photo">
                    <div class="top">
                        <p>照片 </p>
                        <p>&nbsp;PHOTOS</p>
                    </div>
                    <div class="bottom">
                        <div class="zp"></div>
                        <div class="addzp">
                            <label for="sc"></label>
                            <input type="file" name="picfil" id="sc" multiple style="opacity: 0" onchange="val(this)">
                        </div>
                    </div>
                </div>
                <div class="per">
                    <div class="per-name">
                        姓名<span>&nbsp;NAME</span>
                    </div>
                    <label for="user"></label>
                    <input type="text" id="user" class="name" name="user" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" readonly>
                </div>
                <div class="per">
                    <div class="per-name">
                        性别<span>SEX</span>
                    </div>
                    <label for="sel"></label>
                    <select name="sex" id="sel">
                        <option value="" selected="selected">请选择</option>
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select>
                </div>
            <div class="per">
                <div class="per-name">
                    生日<span>BIRTHDAY</span>
                </div>
                <div class="choice">
                    <label for="bir"></label>
                    <input type="date" id="bir" name="bir">
                </div>
            </div>
            <div class="per">
                <div class="per-name">
                    手机号<span>&nbsp;MOBILE NUMBER</span>
                </div>
                <label for="phone"></label>
                <input type="text" name="phone" id="phone" class="name">
            </div>
            <div class="next">
                <button type="submit">下一步 &nbsp;<img src="<?php echo IMG_PATH;?>
next.png" alt=""></button>
            </div>
        </div>
    </form>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        jQuery.validator.addMethod("isMobile", function(value, element) {
            var length = value.length;
            var mobile =<?php echo $_smarty_tpl->tpl_vars['yz']->value;?>
 ;
            return this.optional(element) || (length == 11 && mobile.test(value));
        }, "请正确填写您的手机号码");
        $("#vlform").validate({
            rules:{
                sex:{
                    required:true
                },
                bir:{
                    required:true
                },
                phone:{
                    required:true,
                    minlength:11,
                    isMobile:true
                }
            },messages:{
                sex:{
                    required:'请选择性别'
                },
                bir:{
                    required:'请选择生日'
                },phone:{
                    required:'请输入手机号码',
                    minlength : "确认手机不能小于11个字符",
                    isMobile : "请正确填您的手机号码"
                }
            }
        })
    })
    function val(obj) {
        let yl=document.querySelector('.zp')
        url=window.URL.createObjectURL(obj.files[0]);
        yl.style.backgroundImage=`url(${ url})`
    }
<?php echo '</script'; ?>
>
<?php }
}
