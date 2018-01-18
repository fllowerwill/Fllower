<?php
/* Smarty version 3.1.30, created on 2018-01-18 07:45:37
  from "D:\Desktop\www\Flower\template\index\wx-zjrz-1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6050a19de899_43480782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea204ad81136f8d472655146d3b3f71ba6e4fad6' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\wx-zjrz-1.html',
      1 => 1516261515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6050a19de899_43480782 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="photo">
                <div class="top">
                    <p>照片 </p>
                    <p>&nbsp;PHOTOS</p>
                </div>
                <div class="bottom">
                    <div class="zp"></div>
                    <div class="addzp">
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="per">
                <div class="per-name">
                    姓名<span>&nbsp;NAME</span>
                </div>
                <input type="text" class="name">
            </div>
            <div class="per">
                <div class="per-name">
                    姓名<span>&nbsp;NAME</span>
                </div>
                <select>
                    <option value="男">男</option>
                    <option value="女">女</option>
                </select>
            </div>
        <div class="per">
            <div class="per-name">
                生日<span>BIRTHDAY</span>
            </div>
            <div class="choice">
                <select id="date-sel-year" rel="2015"></select>
                <select id="date-sel-month" rel="9"></select>
                <select id="date-sel-day" rel="10"></select>
            </div>
        </div>
        <div class="per">
            <div class="per-name">
                手机号<span>&nbsp;MOBILE NUMBER</span>
            </div>
            <input type="text" class="name">
        </div>
        <div class="next">
            <a href="index.php?a=zjrz2">下一步 <img src="<?php echo IMG_PATH;?>
next.png" alt=""></a>
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
