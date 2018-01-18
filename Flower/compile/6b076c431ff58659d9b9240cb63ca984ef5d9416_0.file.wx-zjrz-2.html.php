<?php
/* Smarty version 3.1.30, created on 2018-01-18 07:45:34
  from "D:\Desktop\www\Flower\template\index\wx-zjrz-2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a60509ee1fc50_90053044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b076c431ff58659d9b9240cb63ca984ef5d9416' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\wx-zjrz-2.html',
      1 => 1516261532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a60509ee1fc50_90053044 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
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
<form action="">
    <div class="main">
        <div class="per">
            <div class="per-name">
                职业<span>&nbsp;OCCUPATION</span>
            </div>
            <input type="text" class="name">
        </div>
        <div class="per">
            <div class="per-name">
                公司<span>&nbsp;COMPANY</span>
            </div>
            <input type="text" class="name">
        </div>
        <div class="per">
            <div class="per-name">
                证书<span>&nbsp;DIPLOMA</span>
            </div>
            <input type="text" class="name">
        </div>
        <div class="per">
            <div class="per-name">
                邮箱<span>&nbsp;MAILBOX</span>
            </div>
            <input type="text" class="name">
        </div>
        <div class="per">
            <div class="per-name">
                自我评价<span>&nbsp;aboutme</span>
            </div>
            <input type="text" class="name">
        </div>
        <div class="next">
            <a href="">下一步:等待审核</a>
        </div>
    </div>
</form>
</body>
</html>


<?php echo '<script'; ?>
>
    $.date_picker({
        YearSelector:  "#date-sel-year",
        MonthSelector: "#date-sel-month",
        DaySelector:   "#date-sel-day"
    });
<?php echo '</script'; ?>
>
<?php }
}
