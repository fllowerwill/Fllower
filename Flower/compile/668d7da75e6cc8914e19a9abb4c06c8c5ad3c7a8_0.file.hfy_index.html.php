<?php
/* Smarty version 3.1.30, created on 2018-01-23 09:51:20
  from "E:\wamp64\www\Flower\template\index\hfy_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a670598e418b6_11761978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '668d7da75e6cc8914e19a9abb4c06c8c5ad3c7a8' => 
    array (
      0 => 'E:\\wamp64\\www\\Flower\\template\\index\\hfy_index.html',
      1 => 1516692833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a670598e418b6_11761978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
/iconfont/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
</head>
<body>

<div class="menu">
            <div class="user_head">
                <img src="<?php echo IMG_PATH;?>
hfy_banner1.png" alt="">
            </div>
            <div class="user_name">
                HELLOW KITTY
            </div>
            <ul class="menu_list">
                <li>
                    <a href="">
                        <i class="iconfont icon-xiaoxi"></i>
                        &nbsp;
                        <span>我的消息</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="iconfont "></i>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <span>消息提醒</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="iconfont icon-msnui-theme"></i>
                        &nbsp;
                        <span>我的皮肤</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="iconfont icon-duoyuyan"></i>
                        &nbsp;
                        <span>多语言</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="iconfont icon-iconset0346"></i>
                        &nbsp;
                        <span>检查更新</span>
                    </a>
                </li>
                <li>

                </li>
                <li class='quit'>
                    <a href="">
                        <span>退出登录</span>
                    </a>
                </li>
            </ul>
            <div class="pattern">
                <div class="daytime">
                    <i class="iconfont icon-taiyang-copy"></i>
                    &nbsp;
                    <span>日间模式</span>
                </div>
                <div class="nighttime">
                    <i class="iconfont icon-yewan"></i>
                    &nbsp;
                    <span>夜间模式</span>
                </div>
            </div>

        </div>

<header>
<div class="menubtn">
	<img src="<?php echo IMG_PATH;?>
hfy_menu.png" alt="">
</div>
<a href='index.php?a=search' class="search">
	<img src="<?php echo IMG_PATH;?>
hfy_search.png" alt="">
</a>
<div class="title">
	花卉志
</div>

</header>
<section class="banner">


<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
hfy_banner1.png" alt="">
        </div>
        <div class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
hfy_banner1.png" alt="">
        </div>
        <div class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
hfy_banner1.png" alt="">
        </div>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

</section>
<section class="column">
<ul>
    <li>
        <a href="index.php?a=type">
            <img src="<?php echo IMG_PATH;?>
hfy_culomn%20(1).png" alt="">
            <div class='column_text'>分类</div>
        </a>
    </li>
    <li>
        <img src="<?php echo IMG_PATH;?>
hfy_culomn%20(2).png" alt="">
        <div class='column_text'>文章</div>
    </li>
    <li>
        <img src="<?php echo IMG_PATH;?>
hfy_culomn%20(3).png" alt="">
        <div class='column_text'>饮食</div>
    </li>
    <li>
        <img src="<?php echo IMG_PATH;?>
hfy_culomn%20(4).png" alt="">
        <div class='column_text'>搭配</div>
    </li>
</ul>

</section>
<section class='new_attention'>

<div class="attention_title">
    <div class="english_name">Latest  attention</div>
    <div class='chinese_name'>
        <span>最</span>
        <div class="division"></div>
        <span>新</span>
        <div class="division"></div>
        <span>关</span>
        <div class="division"></div>
        <span>注</span>
    </div>
    <div class="dashed"></div>
    <ul class="spot">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<div class="attention_list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="li">
            <a href="index.php?a=content&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="display: block;width: 100%;height: 100%;">
                <div class="attention_pic">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img2'];?>
" alt="">
                </div>
                <div class="attention_content">
                    <div class="content_title">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                    </div>
                    <div class="underline">
                        <div class='underline_box'></div>
                        <div class="underline_line"></div>
                    </div>
                    <div class="title_chinese">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['says'];?>

                    </div>
                    <div class="title_english">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['english'];?>

                   </div>
                    <div class="content_footer">
                        <span class="series">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 0) {?>
                                绿植类
                            <?php } else { ?>
                                花卉类
                            <?php }?>
                        </span>
                        <div class="like_collect">
                            <img src="<?php echo IMG_PATH;?>
hfy_like.png" alt="">
                            &nbsp;
                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
</span>
                            &nbsp;&nbsp;
                            <img src="<?php echo IMG_PATH;?>
hfy_collect.png" alt="">
                            &nbsp;
                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['coll'];?>
</span>
                        </div>
                    </div>

                </div>
                <div class="attention_page">
                </div>
            </a>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    <!--
    <div class="li">
        <div class="attention_pic">
            <img src="<?php echo IMG_PATH;?>
hfy_attention.jpg" alt="">
        </div>
        <div class="attention_content">
            <div class="content_title">
                无印花不夏天
            </div>
            <div class="underline">
                <div class='underline_box'></div>
                <div class="underline_line"></div>
            </div>
            <div class="title_chinese">
                花的“99种”不为人知的秘密
            </div>
            <div class="title_english">
                The "99" secret secrets of flowers.
            </div>
            <div class="content_footer">
                <span class="series">兰/花/系/列</span>
                <div class="like_collect">
                    <img src="<?php echo IMG_PATH;?>
hfy_like.png" alt="">
                    &nbsp;
                    <span>359</span>
                    &nbsp;&nbsp;
                    <img src="<?php echo IMG_PATH;?>
hfy_collect.png" alt="">
                    &nbsp;
                    <span>296</span>
                </div>
            </div>

        </div>
        <div class="attention_page">
        </div>
    </div>
    <div class="li">
        <div class="attention_pic">
            <img src="<?php echo IMG_PATH;?>
hfy_attention.jpg" alt="">
        </div>
        <div class="attention_content">
            <div class="content_title">
                无印花不夏天
            </div>
            <div class="underline">
                <div class='underline_box'></div>
                <div class="underline_line"></div>
            </div>
            <div class="title_chinese">
                花的“99种”不为人知的秘密
            </div>
            <div class="title_english">
                The "99" secret secrets of flowers.
            </div>
            <div class="content_footer">
                <span class="series">兰/花/系/列</span>
                <div class="like_collect">
                    <img src="<?php echo IMG_PATH;?>
hfy_like.png" alt="">
                    &nbsp;
                    <span>359</span>
                    &nbsp;&nbsp;
                    <img src="<?php echo IMG_PATH;?>
hfy_collect.png" alt="">
                    &nbsp;
                    <span>296</span>
                </div>
            </div>

        </div>
        <div class="attention_page">
        </div>
    </div>-->
</div>
<div class="blank">
</div>

<!--<div class="shade">
    <div class="bottompic"></div>
</div>-->

</section>

<scetion class='correlation_recommend'>
    <div class="attention_title">
        <div class="english_name">Relevant recommend</div>
        <div class='chinese_name'>
            <span>相</span>
            <div class="division"></div>
            <span>关</span>
            <div class="division"></div>
            <span>推</span>
            <div class="division"></div>
            <span>荐</span>
        </div>
        <div class="dashed"></div>
        <ul class="spot">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <ul class="relevant_list">
        <li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brr']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
            <div class="relevant_top">
                <div class="relevant_etitle">
                   <?php echo $_smarty_tpl->tpl_vars['i']->value['english'];?>

                </div>
                <div class="relevant_title">
                    <div class="relevant_ctitle">
                        <div class="relevant_spot"></div>
                        <span>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['type'] == 0) {?>
                            绿植类
                        <?php } else { ?>
                            花卉类
                        <?php }?>
                        </span>
                    </div>
                    <div class="relevant_browse">
                        <i class="iconfont icon-browse"></i>
                        <span>&nbsp;</span>
                        <span><?php echo $_smarty_tpl->tpl_vars['i']->value['share'];?>
</span>
                    </div>
                </div>
            </div>
            <div class="relevant_pic">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img1'];?>
" alt="">
            </div>
            <div class="relevant_bottom">
                <div class="relevant_intro">
                    <?php echo $_smarty_tpl->tpl_vars['i']->value['recomm'];?>

                </div>
                <div class="relevant_author">
                    <div class="head_portraits">
                        <img src="<?php echo IMG_PATH;?>
hfy_relevant.png" alt="">
                    </div>
                    <div class="author_name">
                        <span>author_name</span>
                        <sapn style='color: #bbe3c0'>兰草养护专家</sapn>
                    </div>
                    <div class="like_collect">
                        <i class="iconfont icon-dianzan"></i>
                        &nbsp;
                        <span><?php echo $_smarty_tpl->tpl_vars['i']->value['share'];?>
</span>
                        &nbsp;&nbsp;
                        <i class="iconfont icon-shoucang"></i>

                    </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </li>

    </ul>
</scetion>

<footer>
    <ul class="footer_list">
        <li class='show'>
            <a href="index.php">
                <div class="footer_icon hot">
                    <img src="<?php echo IMG_PATH;?>
hfy_%20science.png" alt="">
                </div>
                <div class="footer_text txt">
                    科普
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
        <li>
            <a href="index.php?a=aroundshop">
                <div class="footer_icon">
                    <img src="<?php echo IMG_PATH;?>
hfy_shopping.png" alt="">
                </div>
                <div class="footer_text">
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
<div class="fullshade"></div>
</body>
<!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
hfy_index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
animate.js"><?php echo '</script'; ?>
>

</html><?php }
}
