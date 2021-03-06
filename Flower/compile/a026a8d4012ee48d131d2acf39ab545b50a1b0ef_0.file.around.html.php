<?php
/* Smarty version 3.1.30, created on 2018-01-24 04:01:26
  from "F:\wamp64\www\Flower\template\index\around.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6805162df258_26060708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a026a8d4012ee48d131d2acf39ab545b50a1b0ef' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\around.html',
      1 => 1516262108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6805162df258_26060708 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>周围</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
around.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
/mls_iconfont/iconfont.css">
</head>
<body>
<!--head-->
<header>
    <a href="" class="location"><i class="icon icon-dingwei2"></i></a>
    <div class="title">周围</div>
    <a href="" class="help"><i class="icon icon-wenhao"></i></a>
</header>
<input type="text" placeholder="搜索你喜爱的花店" class="search">
<div class="sou"><i class="icon1 icon-sousuo"></i></div>
<!--content-->
<section>
    <div class="store">
        <img src="<?php echo IMG_PATH;?>
13.png" alt="">
        <div class="storename">商店名称：GIT FACE鲜花时尚店</div>
        <div class="contacts">联系人：贺女士</div>
        <div class="tel">联系电话：138-3548-7461</div>
        <div class="address">详细地址：太原市小店区建设路长风街口100米路西(美特好对面)</div>
    </div>
    <div class="recommend">
        <div class="shop">
            <div class="english">MERCHART RECOMMENDATION</div>
            <ul class="more">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="display">
            <div class="chinese">商家推荐</div>
            <div class="dian"></div>
        </div>
    </div>
    <div class="flower">
        <a href='index.php?a=content' class="flower1"><img src="<?php echo IMG_PATH;?>
14.png" alt=""></a>
        <a  href='index.php?a=content' class="flower2"><img src="<?php echo IMG_PATH;?>
15.png" alt=""></a>
    </div>
</section>
<!--footer-->
<footer>
    <ul class="footer_list">
        <li>
            <a href="index.php">
                <div class="footer_icon">
                    <img src="<?php echo IMG_PATH;?>
hfy_%20science.png" alt="">
                </div>
                <div class="footer_text">
                    首页
                </div>
            </a>

        </li>
        <li>
            <a href="index.php?a=doctor">
                <div class="footer_icon">
                    <img src="<?php echo IMG_PATH;?>
hfy_doctor.png" alt="">
                </div>
                <div class="footer_text">
                    医生
                </div>
            </a>

        </li>
        <div class="RichScan">
            <div class="richscan_round">
                <div class="camera">
                    <img src="<?php echo IMG_PATH;?>
hfy_camera.png" alt="">
                </div>
            </div>
        </div>
        <li class='show'>
            <a href="">
                <div class="footer_icon hot">
                    <img src="<?php echo IMG_PATH;?>
hfy_shopping.png" alt="">
                </div>
                <div class="footer_text txt">
                    周围
                </div>
            </a>

        </li>
        <li>
            <a href="index.php?a=mrrPre">
                <div class="footer_icon">
                    <img src="<?php echo IMG_PATH;?>
hfy_contact.png" alt="">
                </div>
                <div class="footer_text">
                    我的
                </div>
            </a>

        </li>
    </ul>
</footer>
</body>
</html><?php }
}
