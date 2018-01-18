<?php
/* Smarty version 3.1.30, created on 2018-01-18 09:25:44
  from "D:\Desktop\www\Flower\template\index\hbj_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6068182a8428_60618446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0d688c4f89a13af5455ed139795fb525c047760' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\hbj_index.html',
      1 => 1516266930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6068182a8428_60618446 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
    <!-- Demo styles -->
    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
        }
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            position: relative;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        img{
            width: 100%;
            height: 100%;
        }
        div.wz{
            position: absolute;
            bottom: 1.7rem;
        }
        .wzz,.wzy{
            color: #fff;
            font-size: 0.45rem;
            padding: 0.37rem;
            font-family: '苹方 特粗';
        }
        .wzz{
            float: left;
        }
        .wzy{
            float: left;
        }
    </style>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <title>闪屏页1</title>
</head>
<body>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
sp1.png" alt="">
                <!--文字-->
                <div class="wz">
                    <div class="wzz">拍照识花</div>
                    <div class="wzy">解读植物</div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
sp2.png" alt="">
                <!--文字-->
                <div class="wz">
                    <div class="wzz">权威专家</div>
                    <div class="wzy">解答疑难</div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
sp3.png" alt="">
                <!--文字-->
                <div class="wz">
                    <div class="wzz">城市定位</div>
                    <div class="wzy">一键购买</div>
                </div>
            </div>
        </div>
        <!-- Add Pagination 小圆点-->
        <div class="swiper-pagination" style="position: fixed;bottom: 1rem;"></div>
    </div>

    <!-- Swiper JS -->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>

    <!-- Initialize Swiper -->
    <?php echo '<script'; ?>
>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },
        });
    <?php echo '</script'; ?>
>
</body>
<?php echo '<script'; ?>
>
    var num=3;

    function subtract() {
        num--;

        if(num==0){
            location.href='index.php?a=register';

        }
    }
    var t=setInterval(subtract,1000);
<?php echo '</script'; ?>
>
</html><?php }
}
