<?php
/* Smarty version 3.1.30, created on 2018-01-18 07:18:19
  from "D:\Desktop\www\Flower\template\index\search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a604a3b2c73e1_70773769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b5029e5dfd8872fa063c96e3f9fadad129df507' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\search.html',
      1 => 1516259896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a604a3b2c73e1_70773769 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
search.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font5/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font6/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font7/iconfont.css">
    <title>搜索</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!--开始-->
    <div class="beijing">
        <!--搜索-->
        <div class="sousuo">
            <a href="index.php" class="qx"> 取消 </a>
            <div id="input">
                <span class="s1"></span>
                <span class="s2"></span>
                <label for="input1"></label>
                <input type="text" class="iconfont icon-yuandianxiao;" placeholder="玫瑰" id="input1">
                <i class="iconfont icon-huatong"></i>
            </div>
        </div>
    </div>
    <!--历史搜索-->
    <div class="djs"></div>
    <div class="lsss">
        <p>LATEST ATTENTION</p>
        <span class="jg"> 历 史 搜 素 ------------------------------------</span>
        <a href="" class="iconfont icon-msnui-more"></a>
    </div>
    <!--标签-->
    <ul class="label">
        <li>
            <a href="">·玫瑰·</a>
            <a href="">·康乃馨·</a>
            <a href="">·吊篮·</a>
        </li>
        <li>
            <a href="">·鹤望兰·</a>
            <a href="">·兰花·</a>
            <a href="">·宝石花·</a>
            <a href="">·多肉灯泡·</a>
        </li>
        <li>
            <a href="">·黑法师·</a>
            <a href="">·桃美人·</a>
            <a href="">·冰灯玉露·</a>
        </li>
    </ul>
    <!--热门植物-->
    <div class="lsss">
        <p>LATEST ATTENTION</p>
        <span class="jg"> 热 门 植 物 ------------------------------------</span>
        <a href="" class="iconfont icon-msnui-more"></a>
    </div>
    <!--bottom-->
    <ul class="bottom">
        <li>
            <div class="img">
                <img src="<?php echo IMG_PATH;?>
page-no1.png" alt="">
            </div>
            <div class="wen">
                <span class="yuedu iconfont icon-liulan">1350</span>
                <span class="span1" >鹤望兰</span>
                <span class="span2" >永无边际的爱</span>
            </div>
        </li>
        <li>
            <div class="img">
                <img src="<?php echo IMG_PATH;?>
page-no1.png" alt="">
            </div>
            <div class="wen">
                <span class="yuedu iconfont icon-liulan">1350</span>
                <span class="span1" >鹤望兰</span>
                <span class="span2" >永无边际的爱</span>
            </div>
        </li>
        <li>
            <div class="img">
                <img src="<?php echo IMG_PATH;?>
page-no1.png" alt="">
            </div>
            <div class="wen">
                <span class="yuedu iconfont icon-liulan">1350</span>
                <span class="span1" >鹤望兰</span>
                <span class="span2" >永无边际的爱</span>
            </div>
        </li>
        <li>
            <div class="img">
                <img src="<?php echo IMG_PATH;?>
page-no1.png" alt="">
            </div>
            <div class="wen">
                <span class="yuedu iconfont icon-liulan">1350</span>
                <span class="span1" >鹤望兰</span>
                <span class="span2" >永无边际的爱</span>
            </div>
        </li>
    </ul>
</body>
</html><?php }
}
