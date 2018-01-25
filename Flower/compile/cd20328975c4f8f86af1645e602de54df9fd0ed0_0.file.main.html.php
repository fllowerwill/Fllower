<?php
/* Smarty version 3.1.30, created on 2018-01-23 08:02:15
  from "E:\wamp64\www\Flower\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66ec074ea2b3_87996468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd20328975c4f8f86af1645e602de54df9fd0ed0' => 
    array (
      0 => 'E:\\wamp64\\www\\Flower\\template\\admin\\main.html',
      1 => 1516675463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66ec074ea2b3_87996468 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <link href="<?php echo CSS_PATH;?>
bootstrap.css" rel="stylesheet" />

    <link href="<?php echo CSS_PATH;?>
basic.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
   #wrapper{

   }
    iframe{
        width: 100%;
        height: 1000px;
    }
</style>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Fllower Will</a>
            </div>

            <div class="header-right">
                <a href="index.php?m=admin&a=dropout" class="btn btn-danger" title="Logout">退出</a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?php echo IMG_PATH;?>
user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php?m=admin&a=changepass" target='content'>修改管理员密码</a>
                    </li>
                    <li>
                        <a  href="index.php?m=admin&f=users" target='content'><i class="fa fa-bug "></i>用户展示</a>

                    </li>
                    <li>
                        <a ><i class='fa'></i>分类管理<span class=" arrow">&gt;</span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php?m=admin&f=type" target='content'><i class="fa"></i>分类显示</a>
                            </li>
                            <li>
                                <a href="index.php?m=admin&f=type&a=addtype" target='content'><i class="fa "></i>分类添加</a>
                            </li>
                           
                        </ul>
                    </li>
                     <li>

                        <a href="#"><i class="fa fa-yelp "></i>内容管理 <span class=" arrow">&gt;</span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php?m=admin&f=content" target='content'><i class="fa fa-coffee"></i>内容显示</a>
                            </li>
                            <li>
                                <a href="index.php?m=admin&f=content&a=addcontent" target='content'><i class="fa fa-flash "></i>添加内容</a>
                            </li>
                           
                        </ul>
                    </li>


                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <iframe src='' frameborder="0" name='content'></iframe>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
       花卉志管理系统
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <!-- BOOTSTRAP SCRIPTS -->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.js"><?php echo '</script'; ?>
>
    <!-- METISMENU SCRIPTS -->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.metisMenu.js"><?php echo '</script'; ?>
>
       <!-- CUSTOM SCRIPTS -->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
custom.js"><?php echo '</script'; ?>
>
    


</body>
</html>
<?php }
}
