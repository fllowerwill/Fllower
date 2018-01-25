<?php
/* Smarty version 3.1.30, created on 2018-01-24 04:04:41
  from "F:\wamp64\www\Flower\template\index\wx-zjrz-2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6805d92ff1a5_55560468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6d755d9332ca157620e9bb3ddb832160bbef3c5' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\wx-zjrz-2.html',
      1 => 1516608511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6805d92ff1a5_55560468 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wx-专家认证-专业信息</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wx-zjrz-2.css">
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
data.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
</head>
<style>
    .showa{
        position: absolute;
        top:0;
        left: 0px;
        right:0px;
        bottom: 0;
        margin:auto;
        background:rgba(0,0,0,0.6);
        color: #ffffff;
        line-height:12rem;
        font-size:0.45rem;
        text-align: center;
        display: none;
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
<form  id="vlform">
    <div class="main">
        <div class="per">
            <div class="per-name">
                职业<span>&nbsp;OCCUPATION</span>
            </div>
            <label for="zy"></label>
            <input type="text" id="zy" name="zy" class="name">
        </div>
        <div class="per">
            <div class="per-name">
                公司<span>&nbsp;COMPANY</span>
            </div>
            <label for="com"></label>
            <input id="com" name="com" type="text" class="name">
        </div>
        <div class="per">
            <div class="per-name">
                证书<span>&nbsp;DIPLOMA</span>
            </div>
            <label for="zs"></label>
            <input type="text" id="zs" name="zs" class="name">
        </div>
        <div class="per">
            <div class="per-name">
                邮箱<span>&nbsp;MAILBOX</span>
            </div>
            <label for="email"></label>
            <input type="text" id="email" name="email" class="name">
        </div>
        <div class="per">
            <div class="per-name">
                自我评价<span>&nbsp;aboutme</span>
            </div>
            <label for="pj"></label>
            <input type="text" id="pj" name="pj" class="name">
        </div>
        <div class="next">
            <button type="submit">下一步:等待审核</button>
        </div>
    </div>
</form>
    <div class="showa"></div>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        $('#vlform').validate({
            rules:{
                zy:{
                    required:true
                },
                com:{
                    required:true
                },
                zs:{
                    required:true
                },
                email:{
                    required:true,
                    email:true
                },
                pj:{
                  required:true
                }
            },
            messages:{
                zy:{
                    required:'请填写你的职业'
                },
                com:{
                    required:'请填写公司名称'
                },
                zs:{
                    required:'请填写你的证书'
                },
                email:{
                    required:'请输入邮箱',
                    email:'邮箱格式不正确'
                },
                pj:{
                    required:'请填写自我评价'
                }
            },submitHandler(){
                $.ajax({
                    url:'index.php?a=wx_xq',
                    type:'post',
                    data:$("#vlform").serialize(),
                    success:function (res) {
                      if(res=='ok'){
                          $(".showa").html('已提交，正在审核！').show(1000,function () {
                              location.href='index.php?a=mrrPre'
                          });
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
