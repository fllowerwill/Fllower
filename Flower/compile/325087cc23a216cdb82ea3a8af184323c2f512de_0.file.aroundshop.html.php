<?php
/* Smarty version 3.1.30, created on 2018-01-24 07:03:56
  from "F:\wamp64\www\Flower\template\index\aroundshop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a682fdc4184f3_73309310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '325087cc23a216cdb82ea3a8af184323c2f512de' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\aroundshop.html',
      1 => 1516690428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a682fdc4184f3_73309310 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>收藏列表</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
aroundshop.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
iconfont/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
mls_iconfont/iconfont.css">
    <?php echo '<script'; ?>
 src='<?php echo JS_PATH;?>
rem.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo JS_PATH;?>
jquery.min.js'><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <a href='index.php?a=mrrPre' class="colFan">&lt;</a>
    <div class="colZI">周围</div>
    <a href="index.php?a=search2" class="colFan"><i class="icon icon-iconsmallsearch"></i></a>
</header>
<main>
    <div class="collect_article">
        <section class='shop_module'>
            <ul class="attention_list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
                <li>
                    <a href="index.php?a=around&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
">
                    <div class="attention_pic">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['a']->value['next'], 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_1_saved = $_smarty_tpl->tpl_vars['v'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['v']->index == 0) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img1'];?>
" alt="">
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                    <div class="attention_content">
                        <div class="content_title">
                            <?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>

                        </div>
                        <div class="underline">
                            <div class='underline_box'></div>
                            <div class="underline_line"></div>
                        </div>
                        <div class="title_chinese">
                        </div>
                        <div class="title_english">
                            <?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>

                        </div>
                        <div class="content_footer">
                            <span class="series"><?php echo $_smarty_tpl->tpl_vars['a']->value['dis'];?>
</span>
                            <div class="like_collect">
                                <img src="<?php echo IMG_PATH;?>
hfy_like.png" alt="">
                                &nbsp;
                                <span><?php echo $_smarty_tpl->tpl_vars['a']->value['likes'];?>
</span>
                                &nbsp;&nbsp;
                                <img src="<?php echo IMG_PATH;?>
hfy_collect.png" alt="">
                                &nbsp;
                                <span><?php echo $_smarty_tpl->tpl_vars['a']->value['share'];?>
</span>
                            </div>
                        </div>

                    </div>
                    <div class="attention_page">
                    </div>
                    </a>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </section>
    </div>

    <!--<div class="collect_image">-->
        <!--<div class="collect_pic">-->
            <!--<div class="colMain-top">-->
                <!--<p>Today&nbsp;<span>2017-11-8</span></p>-->
                <!--<p>Select</p>-->
            <!--</div>-->
            <!--<div class="colMain-conter">-->

                <!--<div class="colMain-pic">-->
                    <!--<div class="colMain_shade">-->
                        <!--<div class="colMain_shade">-->
                            <!--<div class="shade_circle">-->
                                <!--<i class="iconfont icon-htmal5icon22"></i>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">-->
                <!--</div>-->
                <!--<div class="colMain-pic">-->
                    <!--<img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">-->
                <!--</div>-->
                <!--<div class="colMain-pic">-->
                    <!--<img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="collect_pic">-->
            <!--<div class="colMain-top">-->
                <!--<p>Today&nbsp;<span>2017-11-8</span></p>-->
                <!--<p>Select</p>-->
            <!--</div>-->
            <!--<div class="colMain-conter">-->
                <!--<div class="colMain-pic">-->
                    <!--<img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">-->
                <!--</div>-->
                <!--<div class="colMain-pic">-->
                    <!--<img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">-->
                <!--</div>-->
                <!--<div class="colMain-pic">-->
                    <!--<img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="collect_pic">-->
            <!--<div class="colMain-top">-->
                <!--<p>Today&nbsp;<span>2017-11-8</span></p>-->
                <!--<p>Select</p>-->
            <!--</div>-->
            <!--<div class="colMain-conter">-->
                <!--<div class="colMain-pic">-->
                    <!--<img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">-->
                <!--</div>-->
                <!--<div class="colMain-pic">-->
                    <!--<img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">-->
                <!--</div>-->

            <!--</div>-->
        <!--</div>-->
    <!--</div>-->

</main>
</body>
</html><?php }
}
