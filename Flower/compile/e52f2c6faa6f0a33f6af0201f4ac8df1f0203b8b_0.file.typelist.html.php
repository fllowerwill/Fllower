<?php
/* Smarty version 3.1.30, created on 2018-01-24 01:09:58
  from "F:\wamp64\www\Flower\template\index\typelist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a67dce6cfb1a2_33953583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e52f2c6faa6f0a33f6af0201f4ac8df1f0203b8b' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\typelist.html',
      1 => 1516690854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a67dce6cfb1a2_33953583 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/swiper.min.css"/>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
typecontent.css">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
</head>
<body class="padd_40">
<!--头部开始-->
<header>
	<img src="<?php echo IMG_PATH;?>
list-header.png" alt="">
	<div class="headerbox">
		<a href='index.php?a=type'  class="back"><img src="<?php echo IMG_PATH;?>
type-back.png" alt=""></a>

		<div class="title">
			<div class="headertitle"><?php echo $_smarty_tpl->tpl_vars['r']->value["title"];?>
</div>
			<div class="descbox">
				<div class="heng"></div>
				<div class="desc"><?php echo $_smarty_tpl->tpl_vars['r']->value["descs"];?>
</div>
				<div class="heng"></div>
			</div>
		</div>
	</div>
</header>
<!--头部结束-->
	<div class="tab">
		<a  class="active" href="javascript:;">
			<div class="dian3"></div>
			绿植类
			<div class="dian3"></div>
		</a>
		<a href="javascript:;">
			<div class="dian3"></div>
			花卉类
			<div class="dian3"></div>
		</a>
	</div>
	<div class="swiper-container">
		<div class="refreshtip">下拉可以刷新</div>
		<div class="swiper-wrapper w">
			<div class="swiper-slide d">
				<div class="init-loading list-group-item text-center" style="display: none;width:20%;margin:0 auto;text-align:center;color: #999;font-size: 0.2rem">下拉可以刷新</div>
				<div class="swiper-container2">
				<div class="swiper-wrapper">
					<div class="swiper-slide list-group">
						<div class="list-group-item">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
?>
							<a href="index.php?a=content&id=<?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
"  class="mainbox">
								<div class="mainimg"><img src="<?php echo $_smarty_tpl->tpl_vars['k']->value['img1'];?>
" alt=""></div>
								<div class="maincontent">
									<div class="ct1">
										<div class="mainname"><?php echo $_smarty_tpl->tpl_vars['k']->value['name'];?>
</div>
										<div class="star"></div>
									</div>
									<div class="ct2"><?php echo $_smarty_tpl->tpl_vars['k']->value['says'];?>
</div>
									<div class="ct3">
										<div class="fang"></div>
										<div class="heng1"></div>
										<div class="fang"></div>
									</div>
									<div class="ct4">
										<div class="enjoy">
											<div href="" class="enyimg"><img src="<?php echo IMG_PATH;?>
list-zan.png" alt=""></div>
											<div class="number"><?php echo $_smarty_tpl->tpl_vars['k']->value['likes'];?>
</div>
										</div>
										<div class="enjoy">
											<div href="" class="enyimg"><img src="<?php echo IMG_PATH;?>
list-fenxiang.png" alt=""></div>
											<div class="number"><?php echo $_smarty_tpl->tpl_vars['k']->value['share'];?>
</div>
										</div>
									</div>
								</div>

							</a>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


						</div>
						<!--<div class="list-group-item">列表2</div>-->

					</div>
					<div class="swiper-slide list-group">

						<div class="list-group-item">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f']->value, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?>
							<a href="index.php?a=content&id=<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"  class="mainbox">
								<div class="mainimg"><img src="<?php echo $_smarty_tpl->tpl_vars['k']->value['img1'];?>
" alt=""></div>
								<div class="maincontent">
									<div class="ct1">
										<div class="mainname"><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</div>
										<div class="star"></div>
									</div>
									<div class="ct2"><?php echo $_smarty_tpl->tpl_vars['e']->value['says'];?>
</div>
									<div class="ct3">
										<div class="fang"></div>
										<div class="heng1"></div>
										<div class="fang"></div>
									</div>
									<div class="ct4">
										<div class="enjoy">
											<div href="" class="enyimg"><img src="<?php echo IMG_PATH;?>
list-zan.png" alt=""></div>
											<div class="number" rel="<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['likes'];?>
</div>
										</div>
										<div class="enjoy">
											<div href="" class="enyimg"><img src="<?php echo IMG_PATH;?>
list-fenxiang.png" alt=""></div>
											<div class="number"><?php echo $_smarty_tpl->tpl_vars['e']->value['share'];?>
</div>
										</div>
									</div>
								</div>

							</a>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</div>

						<!--<div class="list-group-item">列表b</div>-->
					</div>
				</div>
				</div>
			</div>
		</div>
		
		<div class="loadtip">上拉加载更多</div>
		<div class="swiper-scrollbar"></div>
	</div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.jquery.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var loadFlag = true;
	var oi = 0;
	var mySwiper = new Swiper('.swiper-container',{
		direction: 'vertical',
		scrollbar: '.swiper-scrollbar',
		slidesPerView: 'auto',
		mousewheelControl: true,
		freeMode: true,
		onTouchMove: function(swiper){		//手动滑动中触发
			var _viewHeight = document.getElementsByClassName('swiper-wrapper')[0].offsetHeight;
            var _contentHeight = document.getElementsByClassName('swiper-slide')[0].offsetHeight;
            
            
            if(mySwiper.translate < 50 && mySwiper.translate > 0) {
				$(".init-loading").html('下拉刷新...').show();
			}else if(mySwiper.translate > 50 ){
				$(".init-loading").html('释放刷新...').show();
			}
		},
		onTouchEnd: function(swiper) {
			var _viewHeight = document.getElementsByClassName('swiper-wrapper')[0].offsetHeight;
            var _contentHeight = document.getElementsByClassName('swiper-slide')[0].offsetHeight;
             // 上拉加载
            if(mySwiper.translate <= _viewHeight - _contentHeight - 50 && mySwiper.translate < 0) {

                // console.log("已经到达底部！");
               
                if(loadFlag){
                	$(".loadtip").html('正在加载...');
                }else{
                	$(".loadtip").html('没有更多啦！');
                }
                
                setTimeout(function() {
                    for(var i = 0; i <1; i++) {
                    	oi++;
                        $(".list-group").eq(mySwiper2.activeIndex).append('\t<div class="list-group-item">\n' +

                            '\t\t\t\t\t\t\t<a href=""  class="mainbox">\n' +
                            '\t\t\t\t\t\t\t\t<div class="mainimg"><img src="<?php echo IMG_PATH;?>
listimg.png" alt=""></div>\n' +
                            '\t\t\t\t\t\t\t\t<div class="maincontent">\n' +
                            '\t\t\t\t\t\t\t\t\t<div class="ct1">\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="mainname">风信子</div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="star"></div>\n' +
                            '\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t<div class="ct2">悲伤的爱情、永远的怀念</div>\n' +
                            '\t\t\t\t\t\t\t\t\t<div class="ct3">\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="fang"></div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="heng1"></div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="fang"></div>\n' +
                            '\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t<div class="ct4">\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="enjoy">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<div href="" class="enyimg"><img src="<?php echo IMG_PATH;?>
list-zan.png" alt=""></div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<div class="number">479749</div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="enjoy">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<div href="" class="enyimg"><img src="<?php echo IMG_PATH;?>
list-fenxiang.png" alt=""></div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<div class="number">758490</div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t</div>\n' +
                            '\n' +
                            '\t\t\t\t\t\t\t</a>\n' +
                            '\t\t\t\t\t\t\t<a href=""  class="mainbox">\n' +
                            '\t\t\t\t\t\t\t\t<div class="mainimg"><img src="<?php echo IMG_PATH;?>
listimg.png" alt=""></div>\n' +
                            '\t\t\t\t\t\t\t\t<div class="maincontent">\n' +
                            '\t\t\t\t\t\t\t\t\t<div class="ct1">\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="mainname">矢车菊</div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="star"></div>\n' +
                            '\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t<div class="ct2">温顺 爱心</div>\n' +
                            '\t\t\t\t\t\t\t\t\t<div class="ct3">\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="fang"></div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="heng1"></div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="fang"></div>\n' +
                            '\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t<div class="ct4">\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="enjoy">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<div href="" class="enyimg"><img src="<?php echo IMG_PATH;?>
list-zan.png" alt=""></div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<div class="number">679344</div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="enjoy">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<div href="" class="enyimg"><img src="<?php echo IMG_PATH;?>
list-fenxiang.png" alt=""></div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<div class="number">848302</div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t</div>\n' +
                            '\n' +
                            '\t\t\t\t\t\t\t</a>\n' +
                            '\t\t\t\t\t\t</div>');
                    }
                     $(".loadtip").html('上拉加载更多...');
                    mySwiper.update(); // 重新计算高度;
                }, 800);
            }
            
            // 下拉刷新
            if(mySwiper.translate >= 50) {
                $(".init-loading").html('正在刷新...').show();
                $(".loadtip").html('上拉加载更多');
                loadFlag = true;
                
                setTimeout(function() {
                    $(".refreshtip").show(0);
                    $(".init-loading").html('刷新成功！');
                    setTimeout(function(){
                    	$(".init-loading").html('').hide();
                    },800);
                    $(".loadtip").show(0);
                    
                    //刷新操作
                    mySwiper.update(); // 重新计算高度;
                }, 1000);
            }else if(mySwiper.translate >= 0 && mySwiper.translate < 50){
            	$(".init-loading").html('').hide();
            }
            return false;
		}
	});
	var mySwiper2 = new Swiper('.swiper-container2',{
		onTransitionEnd: function(swiper){
			
			$('.w').css('transform', 'translate3d(0px, 0px, 0px)')
			$('.swiper-container2 .swiper-slide-active').css('height','auto').siblings('.swiper-slide').css('height','0px');
			mySwiper.update();
			
			$('.tab a').eq(mySwiper2.activeIndex).addClass('active').siblings('a').removeClass('active');
		}
		
	});
	$('.tab a').click(function(){
		
		$(this).addClass('active').siblings('a').removeClass('active');
		mySwiper2.slideTo($(this).index(), 500, false)
		
		$('.w').css('transform', 'translate3d(0px, 0px, 0px)')
		$('.swiper-container2 .swiper-slide-active').css('height','auto').siblings('.swiper-slide').css('height','0px');
		mySwiper.update();
	});

	// $(function(){
	//     $(".number").click(function(){
	//         var likes=$(this);
	//         var id=likes.attr("rel");
	//         likes.fadeOut(300);
	//         $.ajax({
	// 			type:"GET",
	// 			url:url,
	// 			data:"id="+id,
	// 			cache:false,
	// 			success:function(data) {
	// 				likes.html(data);
	// 				likes.fadeIn(300);
     //            }
	// 		});
	//         return false;
	// 	});
	// });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
