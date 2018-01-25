<?php
/* Smarty version 3.1.30, created on 2018-01-24 05:27:08
  from "F:\wamp64\www\Flower\template\index\integral.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a68192c608de6_86351028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '526cd11d8c3af9ebaa8e4d338c4cb48071e96e9e' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\integral.html',
      1 => 1516690682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a68192c608de6_86351028 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>积分商城</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
integral.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
><!--
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
integral.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <a href='index.php?a=mrrPre'  class="colFan">&lt;</a>
    <div class="colZI">积分商城</div>
    <div class="colFan"></div>
</header>
<div class="banner">
    <div class="intSign">签到</div>
    <div class="intZi">
        <div class="intZi-top"><?php echo $_smarty_tpl->tpl_vars['arr']->value['jifen'];?>
</div>
        <div class="intZi-conter">
            <div></div>
            <p>我的积分</p>
            <div></div>
        </div>
        <div class="intZi-bottom">连续签到：<span></span>天</div>
    </div>
    <div class="Sign">
        <div class="Sign-top">
            <p>+3</p>
            <p>+6</p>
            <p>+9</p>
            <p>+12</p>
            <p>+15</p>
            <p>+18</p>
            <p>+21</p>
        </div>
        <div class="Sign-center">
            <div class="Sign-center1"></div>
            <div class="Sign-yuan">
                <div class="Sign-yuanson"></div>
                <div class="Sign-yuanson"></div>
                <div class="Sign-yuanson"></div>
                <div class="Sign-yuanson"></div>
                <div class="Sign-yuanson"></div>
                <div class="Sign-yuanson"></div>
                <div class="Sign-yuanson"></div>
            </div>
        </div>
        <div class="Sign-top" style="font-size: 0.18rem;line-height: 0.18rem;">
            <p>1天</p>
            <p>2天</p>
            <p>3天</p>
            <p>4天</p>
            <p>5天</p>
            <p>6天</p>
            <p>7天</p>
        </div>
    </div>
</div>
<main>
    <div class="intMain">
        <div class="intMain-son">
            <div class="intMain-yuan"></div>
            <div class="intMain-zi">
                <p class="a1">可兑换商品</p>
                <p class="a2">CONVERTIBLE</p>
            </div>
            <div></div>
        </div>
        <div class="intMain-son">
            <div class="intMain-yuan"></div>
            <div class="intMain-zi">
                <p class="a1">已兑换商品</p>
                <p class="a2">CONVERTIBLE</p>
            </div>
            <div></div>
        </div>
    </div>
    <div class="intMain-content" style="display: block;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brr']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
        <div class="content">
            <div class="intMain-contop">

                <p class="contop1"><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</p>
                <div class="contop2">
                    <img src="<?php echo IMG_PATH;?>
mrr7.png" alt="">
                    <p>50积分</p>
                </div>
            </div>
            <div class="intMain-concenter">
                <img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['img1'];?>
" alt="">
            </div>
            <div class="intMain-conbottom">
                <div class="conbottom1">
                    <div></div>
                    <p><?php echo $_smarty_tpl->tpl_vars['b']->value['says'];?>
</p>
                    <div></div>
                </div>
                <div class="conbottom2">
                    <div class="conbottom2-son">
                        <div class="img">
                            <img src="<?php echo IMG_PATH;?>
mrr8.png" alt="">
                        </div>
                        <p><?php echo $_smarty_tpl->tpl_vars['b']->value['likes'];?>
</p>
                    </div>
                    <div class="conbottom2-son">
                        <div class="img">
                            <img src="<?php echo IMG_PATH;?>
mrr9.png" alt="">
                        </div>
                        <p><?php echo $_smarty_tpl->tpl_vars['b']->value['share'];?>
</p>
                    </div>
                </div>
            </div>
            <div class="intMain-exchange">
                <div class="exLeft">
                    <img src="<?php echo IMG_PATH;?>
mrr11.png" alt="">
                </div>
                <div class="exRight">兑换</div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <!--<div class="content">
            <div class="intMain-contop">
                <p class="contop1"><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</p>
                <div class="contop2">
                    <img src="<?php echo IMG_PATH;?>
mrr7.png" alt="">
                    <p><?php echo $_smarty_tpl->tpl_vars['arr']->value['jifen'];?>
积分</p>
                </div>
            </div>
            <div class="intMain-concenter">
                <img src="<?php echo IMG_PATH;?>
mrr10.png" alt="">
            </div>
            <div class="intMain-conbottom">
                <div class="conbottom1">
                    <div></div>
                    <p><?php echo $_smarty_tpl->tpl_vars['arr']->value['says'];?>
</p>
                    <div></div>
                </div>
                <div class="conbottom2">
                    <div class="conbottom2-son">
                        <div class="img">
                            <img src="<?php echo IMG_PATH;?>
mrr8.png" alt="">
                        </div>
                        <p><?php echo $_smarty_tpl->tpl_vars['b']->value['likes'];?>
</p>
                    </div>
                    <div class="conbottom2-son">
                        <div class="img">
                            <img src="<?php echo IMG_PATH;?>
mrr9.png" alt="">
                        </div>
                        <p><?php echo $_smarty_tpl->tpl_vars['b']->value['share'];?>
</p>
                    </div>
                </div>
            </div>
            <div class="intMain-exchange">
                <div class="exLeft">
                    <img src="<?php echo IMG_PATH;?>
mrr11.png" alt="">
                </div>
                <div class="exRight">兑换</div>
            </div>
        </div>-->
    </div>
    <div class="intMain-content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['crr']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
        <div class="content">
            <div class="intMain-contop">
                <p class="contop1"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</p>
                <div class="contop2">
                    <img src="<?php echo IMG_PATH;?>
mrr7.png" alt="">
                    <p>120积分</p>
                </div>
            </div>
            <div class="intMain-concenter">
                <img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['img1'];?>
" alt="">
            </div>
            <div class="intMain-conbottom">
                <div class="conbottom1">
                    <div></div>
                    <p><?php echo $_smarty_tpl->tpl_vars['c']->value['says'];?>
</p>
                    <div></div>
                </div>
                <div class="conbottom2">
                    <div class="conbottom2-son">
                        <div class="img">
                            <img src="<?php echo IMG_PATH;?>
mrr12.png" alt="">
                        </div>
                        <p><?php echo $_smarty_tpl->tpl_vars['c']->value['time'];?>
</p>
                    </div>
                </div>
            </div>
            <div class="intMain-exchange">
                <div class="exLeft">
                    <img src="<?php echo IMG_PATH;?>
mrr11.png" alt="">
                </div>
                <div class="exRight">兑换</div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</main>
</body>
</html><?php }
}
