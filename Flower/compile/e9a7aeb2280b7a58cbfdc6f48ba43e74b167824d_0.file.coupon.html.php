<?php
/* Smarty version 3.1.30, created on 2018-01-18 09:37:34
  from "D:\Desktop\www\Flower\template\index\coupon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a606adeb4d272_15720597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9a7aeb2280b7a58cbfdc6f48ba43e74b167824d' => 
    array (
      0 => 'D:\\Desktop\\www\\Flower\\template\\index\\coupon.html',
      1 => 1516268240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a606adeb4d272_15720597 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
coupon.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font1/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font2/iconfont.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
font3/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <title>积分奖励</title>
    <style>
        .form-horizontal{
            width: 86%;
            margin: 0 auto;
        }
        .icon-shuyec{
            font-size: 0.32rem;
            color: greenyellow;
        }
        .btn{
            display: block;
            margin: auto;
            width: 1.16rem;
            height: 0.58rem;
            margin-top: 0.1rem;
            color: #fff;
            background: #00A33C;
            text-align: center;
            line-height: 0.3rem;
            border-radius: .12rem;
        }
    </style>
</head>
<body>
    <!--开始-->
    <div class="banner">
        <!--背景图-->
        <img src="<?php echo IMG_PATH;?>
sign-in.png" alt="">
        <!--二层背景-->
        <div class="ec">
            <!--上部-->
            <div class="top">
                <div class="top1">
                    <img src="<?php echo IMG_PATH;?>
sign-in1.png" alt="">
                </div>
                <div class="hua">
                    <img src="<?php echo IMG_PATH;?>
sign-in2.png" alt="">
                </div>
                <div class="huahui">花卉志</div>
                <p class="huahuiy">FLOWERS AND PLANTS</p>
            </div>
            <!--下部-->
            <div class="bottom">
                <div class="b1">
                    <div class="b1z">
                        <div class="b1z1"></div>
                        <div class="b1z2"></div>
                    </div>
                    <a class="b1y">更多 <i class="iconfont icon-gengduo"></i></a>
                </div>
                <!--表单-->
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" style="color: #999;">用户名NAME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control iconfont icon-shuyec " id="inputEmail3" placeholder="&#xe605;请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label" style="color: #999;">密码PASSWORD</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control iconfont icon-shuyec" id="inputPassword3" placeholder="&#xe605;请输入密码">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default"> > </button>
                        </div>
                    </div>
                </form>
                <div class="b2">第三方登录</div>
                <ul>
                    <li>
                        <i class="iconfont icon-qq"></i>
                    </li>
                    <li>
                        <i class="iconfont icon-weixin"></i>
                    </li>
                    <li>
                        <i class="iconfont icon-weibo"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--遮罩-->
    <div class="zhezhao">
        <img src="<?php echo IMG_PATH;?>
coupon.png" alt="">
        <h2>恭喜您！获得商品兑换积分！</h2>
        <p>积分可兑换商品，直抵现金！</p>
        <a class="zd">
            知道啦~
        </a>
    </div>
</body>
<?php echo '<script'; ?>
>
    var num=3;

    function subtract() {
        num--;

        if(num==0){
            location.href='index.php?a=signin';

        }
    }
    var t=setInterval(subtract,1000);
<?php echo '</script'; ?>
>
</html><?php }
}
