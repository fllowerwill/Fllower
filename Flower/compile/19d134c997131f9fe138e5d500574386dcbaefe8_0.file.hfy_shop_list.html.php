<?php
/* Smarty version 3.1.30, created on 2018-01-23 07:50:09
  from "E:\wamp64\www\Flower\template\index\hfy_shop_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66e931ed9717_16094028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d134c997131f9fe138e5d500574386dcbaefe8' => 
    array (
      0 => 'E:\\wamp64\\www\\Flower\\template\\index\\hfy_shop_list.html',
      1 => 1516693808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66e931ed9717_16094028 (Smarty_Internal_Template $_smarty_tpl) {
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
hfy_shop_list.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
iconfont/iconfont.css">
    <?php echo '<script'; ?>
 src='<?php echo JS_PATH;?>
rem.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo JS_PATH;?>
jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo JS_PATH;?>
hfy_shop_list.js'><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <a href='index.php?a=mrrPre' class="colFan">&lt;</a>
    <div class="colZI">我的收藏</div>
    <div class="colFan"></div>
</header>
<div class="colDao">
    <div class="colDao-son son1">
        <div class="colDao-sond"></div>
        <p>文章</p>
        <div class="colDao-sond"></div>
    </div>
    <div class="colDao-son">
        <div class="colDao-sond"></div>
        <p>图片</p>
        <div class="colDao-sond"></div>
    </div>
</div>
<main>
    <div class="collect_article">
        <section class='shop_module'>
            <div class="shop_title">
                <div class="colMain-top">
                    <p>Today&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['t']->value['time'];?>
</span></p>
                    <p>Select</p>
                </div>
            </div>
            <ul class="attention_list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                <li>
                    <a href="index.php?a=content&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" style="display: block;overflow: hidden;width: 100%;height: 100%;">
                    <div class="attention_pic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['r']->value['img1'];?>
" alt="">
                    </div>
                    <div class="attention_content">
                        <div class="content_title">
                            <?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>

                        </div>
                        <div class="underline">
                            <div class='underline_box'></div>
                            <div class="underline_line"></div>
                        </div>
                        <div class="title_chinese">
                            <?php echo $_smarty_tpl->tpl_vars['r']->value['says'];?>

                        </div>
                        <div class="title_english">
                            <?php echo $_smarty_tpl->tpl_vars['r']->value['english'];?>

                        </div>
                        <div class="content_footer">
                            <span class="series">兰/花/系/列</span>
                            <div class="like_collect">
                                <img src="<?php echo IMG_PATH;?>
hfy_like.png" alt="">
                                &nbsp;
                                <span>                            <?php echo $_smarty_tpl->tpl_vars['r']->value['likes'];?>

</span>
                                &nbsp;&nbsp;
                                <img src="<?php echo IMG_PATH;?>
hfy_collect.png" alt="">
                                &nbsp;
                                <span>                            <?php echo $_smarty_tpl->tpl_vars['r']->value['coll'];?>

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
        <section class='shop_module'>
            <div class="shop_title">
                <div class="colMain-top">
                    <p>Today&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['ts']->value['time'];?>
</span></p>
                    <p>Select</p>
                </div>
            </div>
            <ul class="attention_list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>

                <li>
                    <a href="index.php?a=content&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" style="display: block;overflow: hidden;width: 100%;height: 100%;">
                    <div class="attention_pic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['r']->value['img2'];?>
" alt="">
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
                            <?php echo $_smarty_tpl->tpl_vars['a']->value['says'];?>


                        </div>
                        <div class="title_english">
                            <?php echo $_smarty_tpl->tpl_vars['a']->value['english'];?>

                        </div>
                        <div class="content_footer">
                            <span class="series">兰/花/系/列</span>
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
                                <span><?php echo $_smarty_tpl->tpl_vars['a']->value['coll'];?>
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

    <div class="collect_image">
        <div class="collect_pic">
            <div class="colMain-top">
                <p>Today&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['t']->value['time'];?>
</span></p>
                <p>Select</p>
            </div>
            <div class="colMain-conter">

                <div class="colMain-pic">
                    <div class="colMain_shade">
                        <div class="colMain_shade">
                            <div class="shade_circle">
                                <i class="iconfont icon-htmal5icon22"></i>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">
                </div>
                <div class="colMain-pic">
                    <img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">
                </div>
                <div class="colMain-pic">
                    <img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">
                </div>
            </div>
        </div>
        <div class="collect_pic">
            <div class="colMain-top">
                <p>Today&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['ts']->value['time'];?>
</span></p>
                <p>Select</p>
            </div>
            <div class="colMain-conter">
                <div class="colMain-pic">
                    <img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">
                </div>
                <div class="colMain-pic">
                    <img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">
                </div>
                <div class="colMain-pic">
                    <img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">
                </div>
            </div>
        </div>
        <div class="collect_pic">
            <div class="colMain-top">
                <p>Today&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['t']->value['time'];?>
</span></p>
                <p>Select</p>
            </div>
            <div class="colMain-conter">
                <div class="colMain-pic">
                    <img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">
                </div>
                <div class="colMain-pic">
                    <img src="<?php echo IMG_PATH;?>
mrr6.png" alt="">
                </div>

            </div>
        </div>
    </div>

</main>
<footer>
    <footer>
        <div class="share">
            <i class="iconfont icon-shoucang"></i>
            <span>分享</span>
        </div>
        <div class="del">
            <i class="iconfont icon-shoucang"></i>
            <span>删除</span>
        </div>
        <div class="checkall">
            <i class="iconfont icon-shoucang"></i>
            <span>全选</span>
        </div>
    </footer>
</footer>
</body>
</html><?php }
}
