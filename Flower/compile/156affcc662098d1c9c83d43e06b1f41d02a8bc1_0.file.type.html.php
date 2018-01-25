<?php
/* Smarty version 3.1.30, created on 2018-01-24 05:34:19
  from "F:\wamp64\www\Flower\template\index\type.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a681adb5c9910_55620755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '156affcc662098d1c9c83d43e06b1f41d02a8bc1' => 
    array (
      0 => 'F:\\wamp64\\www\\Flower\\template\\index\\type.html',
      1 => 1516772056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a681adb5c9910_55620755 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>分类</title>
<!--<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
jq22-demo.css">-->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
type.css">
	<link rel="stylesheet" href="<?php echo FONT_PATH;?>
iconfont/iconfont.css">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
</head>

<body>

	<header>
		<a href='index.php'  class="back"><img src="<?php echo IMG_PATH;?>
type-back.png" alt=""></a>
		<div class="title">分类</div>
	</header>

	<!--banner开始-->
	<section class="banner">
		<div class="bn-img"><img src="<?php echo IMG_PATH;?>
type-bn.png" alt=""></div>
		<div class="bn-letter">
			<span class="englishname">GREEN DAY PLANT</span>
			<div class="readed">
				<img src="<?php echo IMG_PATH;?>
type-readed.png" alt="">
				<div class="reader">293020</div>
			</div>
		</div>

		<div class="bn-letter">
			<ul class="dian">
				<li class="dian1"></li>
				<li class="dian2"></li>
				<li class="dian2"></li>
				<li class="dian2"></li>
				<li class="dian2"></li>
			</ul>
			<ul class="more">
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</section>

	<!--banner结束-->

	<!--标题开始-->
	<section class="select">
		<a class="slect-box active">

			<div class="dian3"></div>
			优选精品
			<div class="dian3"></div>
		</a>

	</section>

	<!--标题结束-->

	<!--<!-选择开始&ndash;&gt;-->
	<main>
		<ul class="lie">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
			<li class="box1">
				<div class="manlogo icon-icon_gerenzhongxin"></div>
				<div class="manletter"><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</div>
			</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['crr']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
		<div class="liebiao lb-active">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value['con'], 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
			<a href="index.php?a=typelist&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="box2">
				<div class="box2img"><img src="<?php echo IMG_PATH;?>
type-img.png" alt=""></div>
				<div class="box2name"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</div>
				<div class="box2english"><?php echo $_smarty_tpl->tpl_vars['i']->value['english'];?>
</div>
			</a>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


	</main>

	<!--选择结束-->
</body>
</html>
<?php echo '<script'; ?>
>
	$(function () {
		var liebiaos=document.querySelectorAll('.liebiao');
		console.log(liebiaos);
        // $(this).eq(0).addClass('box-active');
        // $('.liebiao').eq(1).addClass('lb-active');
		$('.lie').find('li').each(function (index,val) {
			$(this).on('click',function (e) {
				e.preventDefault();
				$(this).addClass('box-active').siblings().removeClass('box-active');

                $('.liebiao').eq(index).addClass('lb-active').siblings().removeClass('lb-active');
            })
        })
    })


<?php echo '</script'; ?>
><?php }
}
