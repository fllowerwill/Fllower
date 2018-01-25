<?php
/* Smarty version 3.1.30, created on 2018-01-24 07:04:37
  from "F:\wamp64\www\Flower\template\index\mrrPre.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6830052e71b2_45377571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81dd506e3ea1a7730f810ef448ce2ba135cb464b' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\mrrPre.html',
      1 => 1516777475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6830052e71b2_45377571 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
mrrPre.css">
    <?php echo '<script'; ?>
 src='<?php echo JS_PATH;?>
rem.js'><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <img src="<?php echo IMG_PATH;?>
mrr1.png" alt="">
    <a class="hea">
        <div class="pretou">
            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
" alt="">
        </div>
        <div class="preming">
            <div>

                <p><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</p>

                    <img src="<?php echo IMG_PATH;?>
mrr4.jpg" alt="" class='changepass'>

            </div>
            <div>A woman, you can slowly go away</div>
        </div>
    </a>
    <div class="prexin">
        <div class="preguan">
            <p><?php echo $_smarty_tpl->tpl_vars['arr']->value['coll'];?>
</p>
            <div class="prewen">
                <p>消息</p>
                <p>XIAOXI</p>
            </div>
        </div>
        <div class="shu"></div>
        <div class="preguan">
            <p><?php echo $_smarty_tpl->tpl_vars['arr']->value['likes'];?>
</p>
            <div class="prewen">
                <p>关注</p>
                <p>GUANZHU</p>
            </div>
        </div>
        <div class="shu"></div>
        <div class="preguan">
            <p><?php echo $_smarty_tpl->tpl_vars['row']->value['jifen'];?>
</p>
            <div class="prewen">
                <p>积分</p>
                <p>JIFEN</p>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="main">
        <a href="index.php?a=shoucang">
            <div class="preimg">
                <img src="<?php echo IMG_PATH;?>
mrr5.png" alt="">
            </div>
            <div class="premain">
                <div class="premain-top">
                    <p>我的收藏</p>
                    <div class="premain-label">23</div>
                </div>
                <div class="premain-bottom">
                    <p>MY COLLECTION</p>
                </div>
            </div>
            <div class="preright">&gt;</div>
        </a>
    </div>


    <div class="main">
        <a href="index.php?a=zjrz">
            <div class="preimg">
                <img src="<?php echo IMG_PATH;?>
mrr5.png" alt="">
            </div>
            <div class="premain">
                <div class="premain-top">
                    <p>专家认证</p>
                </div>
                <div class="premain-bottom">
                    <p>EXPERT CERTIFICATION</p>
                </div>
            </div>
            <div class="preright">&gt;</div>

        </a>

    </div>
    <div class="main">
        <div class="preimg">
            <img src="<?php echo IMG_PATH;?>
mrr5.png" alt="">
        </div>
        <div class="premain">
            <div class="premain-top">
                <p>悬赏征集</p>
            </div>
            <div class="premain-bottom">
                <p>REWARD AND COLLECTION</p>
            </div>
        </div>
        <div class="preright">&gt;</div>
    </div>
    <div class="main">
        <a href="index.php?a=integral">
            <div class="preimg">
                <img src="<?php echo IMG_PATH;?>
mrr5.png" alt="">
            </div>
            <div class="premain">
                <div class="premain-top">
                    <p>积分商城</p>
                </div>
                <div class="premain-bottom">
                    <p>INTEGRAL MALL</p>
                </div>
            </div>
            <div class="preright">&gt;</div>
        </a>


    </div>
    <div class="main">
        <div class="preimg">
            <img src="<?php echo IMG_PATH;?>
mrr5.png" alt="">
        </div>
        <div class="premain">
            <div class="premain-top">
                <p>意见反馈</p>
            </div>
            <div class="premain-bottom">
                <p>REWARD AND COLLECTION</p>
            </div>
        </div>
        <div class="preright">&gt;</div>
    </div>
    <div class="main">
        <div class="preimg">
            <img src="<?php echo IMG_PATH;?>
mrr5.png" alt="">
        </div>
        <div class="premain">
            <div class="premain-top">
                <p>设置</p>
            </div>
            <div class="premain-bottom">
                <p>INTEGRAL MALL</p>
            </div>
        </div>
        <div class="preright">&gt;</div>
    </div>
</main>


<footer>
    <ul class="footer_list">
        <li >
            <a href="index.php">
                <div class="footer_icon ">
                    <img src="<?php echo IMG_PATH;?>
hfy_%20science.png" alt="">
                </div>
                <div class="footer_text ">
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
            <a href="index.php?a=around">
                <div class="footer_icon">
                    <img src="<?php echo IMG_PATH;?>
hfy_shopping.png" alt="">
                </div>
                <div class="footer_text">
                    周围
                </div>
            </a>

        </li>
        <li class='show'>
            <a href="index.php?a=mrrPre">
                <div class="footer_icon hot">
                    <img src="<?php echo IMG_PATH;?>
hfy_contact.png" alt="">
                </div>
                <div class="footer_text txt">
                    我的
                </div>
            </a>

        </li>
    </ul>
</footer>
</body>
<?php echo '<script'; ?>
>
    var changepass=document.querySelector('.changepass');
    changepass.onclick=function () {
        location.href='index.php?a=changepass';
    }
<?php echo '</script'; ?>
>
</html><?php }
}
