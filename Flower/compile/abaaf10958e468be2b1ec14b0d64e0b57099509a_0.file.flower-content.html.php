<?php
/* Smarty version 3.1.30, created on 2018-01-24 01:19:20
  from "F:\wamp64\www\Flower\template\index\flower-content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a67df18746049_89573577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abaaf10958e468be2b1ec14b0d64e0b57099509a' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\flower-content.html',
      1 => 1516691100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a67df18746049_89573577 (Smarty_Internal_Template $_smarty_tpl) {
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
flower-content.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
type-iconfont/iconfont.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://www.jq22.com/jquery/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<!--头部开始-->
<header>
    <a href="javascript:history.back();" class="back"><img src="<?php echo IMG_PATH;?>
type-back.png" alt=""></a>
    <div class="title"><?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
</div>
</header>

<!--头部结束-->
<!--banner开始-->
<section class="banner">
    <div class="container">
        <div id="slide" class="slide" class="index-slide" alt="star">
            <!-- 轮播图片数量可自行增减 -->
            <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['img1'];?>
"/></div>
            <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['img2'];?>
"/></div>
            <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['img3'];?>
"/></div>
            <div class="slide-bt"></div>
        </div>
    </div>

</section>


<!--banner结束-->
<!--信息开始-->
<section class="infor">
    <div class="infor-left">
        <div class="inforlogo"><img src="<?php echo IMG_PATH;?>
infor-logo.png" alt=""></div>
        <div class="inforletter">植物信息</div>
    </div>
    <div class="infor-right">
        <div class="inforbox">
            <div class="infor-shou">收藏</div>
           <div class="font icon-xingxing"></div>
        </div>
    </div>
</section>
<!--信息结束-->
<!--描述开始-->
<div class="desc">
    <ul class="descbox">
        <li class="heng1">
            <div class="dian"></div>
            <div class="descletter"><?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
</div>
        </li>
        <li class="heng1">
            <div class="dian"></div>
            <div class="descletter"><?php echo $_smarty_tpl->tpl_vars['arr']->value['temp'];?>
</div>
        </li>
        <li class="heng1">
            <div class="dian"><img src="<?php echo IMG_PATH;?>
shuidi.png" alt=""></div>
            <div class="descletter">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value['humi'];
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_prefixVariable1+1 - (1) : 1-($_prefixVariable1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <div class="descimg"><img src="<?php echo IMG_PATH;?>
ye1.png" alt=""></div>
                <?php }
}
?>

            </div>
        </li>
        <li class="heng1">
            <div class="dian"><img src="<?php echo IMG_PATH;?>
yangguan.png" alt=""></div>
            <div class="descletter">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value['light'];
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_prefixVariable2+1 - (1) : 1-($_prefixVariable2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <div class="descimg"><img src="<?php echo IMG_PATH;?>
ye1.png" alt=""></div>
                <?php }
}
?>

            </div>
        </li>
    </ul>
    <div class="tuijian">
        <div class="tj-letter">推荐指数：</div>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['arr']->value['reco'];
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_prefixVariable3+1 - (1) : 1-($_prefixVariable3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <div class="font1 icon-xingxing"></div>
        <?php }
}
?>

    </div>
</div>

<!--描述结束-->
<!--信息开始-->
<section class="infor">
    <div class="infor-left">
        <div class="inforlogo"><img src="<?php echo IMG_PATH;?>
infor-logo.png" alt=""></div>
        <div class="inforletter">形态特征</div>
    </div>
</section>
<!--信息结束-->

<!--描述开始-->
<div class="desc">
    <div class="descbox1">
    <?php echo $_smarty_tpl->tpl_vars['arr']->value['descs'];?>

    </div>
</div>

<!--描述结束-->

<!--信息开始-->
<section class="infor">
    <div class="infor-left">
        <div class="inforlogo"><img src="<?php echo IMG_PATH;?>
infor-logo.png" alt=""></div>
        <div class="inforletter">养护宝典</div>
    </div>
</section>
<!--信息结束-->
<!--描述开始-->
<div class="desc">
    <li class="heng">
        <div class="dian"></div>
        <div class="descletter">浇灌秘籍——不宜用太急的水流</div>
    </li>
    <li class="heng">
        <div class="dian"></div>
        <div class="descletter">注意光照——光照充足搬到室外</div>
    </li>
    <li class="heng">
        <div class="dian"></div>
        <div class="descletter">培土原则——不宜用
            太急的水流</div>
    </li>
    <li class="heng">
        <div class="dian"></div>
        <div class="descletter">注意事项——光照充足搬到室外</div>
    </li>
</div>

<!--描述结束-->

<div class="jiange"></div>


<!--推荐植物开始-->

<section class="tj">
    <div class="tuijiantitle">
        <div class="title1">
            <div class="titlimg"><img src="<?php echo IMG_PATH;?>
tuijian.png" alt=""></div>
            <div class="tjletter">推荐植物</div>
        </div>
        <div class="title2">LATEST ATTENTION</div>
    </div>


    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="swiper-slide">
                <div class="tjbox">
                    <div class="tjboximg"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img2'];?>
" alt=""></div>
                    <div class="tjdi"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>


</section>


<!--推荐植物结束-->

</body>
</html>
<?php echo '<script'; ?>
>
    var autoLb = false;          //autoLb=true为开启自动轮播
    var autoLbtime = 1;         //autoLbtime为轮播间隔时间（单位秒）
    var touch = true;           //touch=true为开启触摸滑动
    var slideBt = true;         //slideBt=true为开启滚动按钮


    var slideNub;               //轮播图片数量

    //窗口大小改变时改变轮播图宽高
    $(window).resize(function(){
        $(".slide").height($(".slide").width()*0.56);
    });


    $(function(){
        $(".slide").height($(".slide").width()*0.56);
        slideNub = $(".slide .img").size();             //获取轮播图片数量
        for(i=0;i<slideNub;i++){
            $(".slide .img:eq("+i+")").attr("data-slide-imgId",i);
        }


        //根据轮播图片数量设定图片位置对应的class
        if(slideNub==1){
            for(i=0;i<slideNub;i++){
                $(".slide .img:eq("+i+")").addClass("img3");
            }
        }
        if(slideNub==2){
            for(i=0;i<slideNub;i++){
                $(".slide .img:eq("+i+")").addClass("img"+(i+3));
            }
        }
        if(slideNub==3){
            for(i=0;i<slideNub;i++){
                $(".slide .img:eq("+i+")").addClass("img"+(i+2));
            }
        }
        if(slideNub>3&&slideNub<6){
            for(i=0;i<slideNub;i++){
                $(".slide .img:eq("+i+")").addClass("img"+(i+1));
            }
        }
        if(slideNub>=6){
            for(i=0;i<slideNub;i++){
                if(i<5){
                    $(".slide .img:eq("+i+")").addClass("img"+(i+1));
                }else{
                    $(".slide .img:eq("+i+")").addClass("img5");
                }
            }
        }


        //根据轮播图片数量设定轮播图按钮数量
        if(slideBt){
            for(i=1;i<=slideNub;i++){
                $(".slide-bt").append("<span data-slide-bt='"+i+"' onclick='tz("+i+")'></span>");
            }
            $(".slide-bt").width(slideNub*34);
            $(".slide-bt").css("margin-left","-"+slideNub*17+"px");
        }


        //自动轮播
        if(autoLb){
            setInterval(function(){
                right();
            }, autoLbtime*1000);
        }


        if(touch){
            k_touch();
        }
        slideLi();
        imgClickFy();
    })


    //右滑动
    function right(){
        var fy = new Array();
        for(i=0;i<slideNub;i++){
            fy[i]=$(".slide .img[data-slide-imgId="+i+"]").attr("class");
        }
        for(i=0;i<slideNub;i++){
            if(i==0){
                $(".slide .img[data-slide-imgId="+i+"]").attr("class",fy[slideNub-1]);
            }else{
                $(".slide .img[data-slide-imgId="+i+"]").attr("class",fy[i-1]);
            }
        }
        imgClickFy();
        slideLi();
    }


    //左滑动
    function left(){
        var fy = new Array();
        for(i=0;i<slideNub;i++){
            fy[i]=$(".slide .img[data-slide-imgId="+i+"]").attr("class");
        }
        for(i=0;i<slideNub;i++){
            if(i==(slideNub-1)){
                $(".slide .img[data-slide-imgId="+i+"]").attr("class",fy[0]);
            }else{
                $(".slide .img[data-slide-imgId="+i+"]").attr("class",fy[i+1]);
            }
        }
        imgClickFy();
        slideLi();
    }


    //轮播图片左右图片点击翻页
    function imgClickFy(){
        $(".slide .img").removeAttr("onclick");
        $(".slide .img2").attr("onclick","left()");
        $(".slide .img4").attr("onclick","right()");
    }


    //修改当前最中间图片对应按钮选中状态
    function slideLi(){
        var slideList = parseInt($(".slide .img3").attr("data-slide-imgId")) + 1;
        $(".slide-bt span").removeClass("on");
        $(".slide-bt span[data-slide-bt="+slideList+"]").addClass("on");
    }


    //轮播按钮点击翻页
    function tz(id){
        var tzcs = id - (parseInt($(".slide .img3").attr("data-slide-imgId")) + 1);
        if(tzcs>0){
            for(i=0;i<tzcs;i++){
                setTimeout(function(){
                    right();
                },1);
            }
        }
        if(tzcs<0){
            tzcs=(-tzcs);
            for(i=0;i<tzcs;i++){
                setTimeout(function(){
                    left();
                },1);
            }
        }
        slideLi();
    }


    //触摸滑动模块
    function k_touch() {
        var _start = 0, _end = 0, _content = document.getElementById("slide");
        _content.addEventListener("touchstart", touchStart, false);
        _content.addEventListener("touchmove", touchMove, false);
        _content.addEventListener("touchend", touchEnd, false);
        function touchStart(event) {
            var touch = event.targetTouches[0];
            _start = touch.pageX;
        }
        function touchMove(event) {
            var touch = event.targetTouches[0];
            _end = (_start - touch.pageX);
        }

        function touchEnd(event) {
            if (_end < -100) {
                left();
                _end=0;
            }else if(_end > 100){
                right();
                _end=0;
            }
        }
    }


<?php echo '</script'; ?>
>



<!--下面轮播-->
<?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2.5,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
<?php echo '</script'; ?>
><?php }
}
