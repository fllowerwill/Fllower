<?php
/* Smarty version 3.1.30, created on 2018-01-23 08:02:12
  from "E:\wamp64\www\Flower\template\admin\mess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66ec048e6272_71928414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5cf8cda6091600fcb49f5bd77f60803e39b79fd' => 
    array (
      0 => 'E:\\wamp64\\www\\Flower\\template\\admin\\mess.html',
      1 => 1516589153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66ec048e6272_71928414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        main{
            width: 500px;
            height: 400px;
            box-shadow: 0 0 10px 3px rgba(0,0,0,0.6);
            margin: 100px auto;
        }
        .text{
            width: 100%;
            height: 100px;
            background: rgba(219,62,62,0.8);
            font-size: 32px;
            text-align: center;
            line-height: 100px;
            font-weight: bold;
        }
        .back{
            font-size: 24px;
            text-align: center;
            line-height: 100px;
        }
        .back span{
            color: red;
        }
        .back a{
            color: #00b3ff;
        }
    </style>
</head>
<body>
        <main>
            <div class="text">
                <?php echo $_smarty_tpl->tpl_vars['mess']->value;?>

            </div>
            <div class="back">
                <span>5</span>秒之后返回， <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击立即跳转</a>
            </div>
        </main>
</body>
<?php echo '<script'; ?>
>
   var num=5;
   var span=document.querySelector('.back span');
   var a=span.nextElementSibling;
   function subtract() {
       num--;
       span.innerHTML=num;
       if(num==0){
           location.href=a.href;

       }
   }
   var t=setInterval(subtract,1000);

<!--<?php echo '</script'; ?>
>-->
</html><?php }
}
