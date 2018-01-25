<?php
/* Smarty version 3.1.30, created on 2018-01-23 08:02:22
  from "E:\wamp64\www\Flower\template\admin\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66ec0e8f0b46_17513038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5458528d1dd97abd0bb4aa7f4c41dc63d0509803' => 
    array (
      0 => 'E:\\wamp64\\www\\Flower\\template\\admin\\user.html',
      1 => 1516431833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66ec0e8f0b46_17513038 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo CSS_PATH;?>
bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo CSS_PATH;?>
font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="<?php echo CSS_PATH;?>
basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?php echo CSS_PATH;?>
custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->

</head>
<style>
    .panel{
        width: 1200px;
    }
    th,td{
        text-align: center;
    }
    .table  tbody  tr  td{
        height: 80px;
        line-height: 80px;
    }
    .juzhong img{
        width: 80px;
        height: 80px;
        margin: 0 auto;
    }
    .text{
        width: 100%;
        height: 100%;
        padding: 3px;
        resize: none;
        line-height: 20px;
        font-size: 10px;
        color:black;



    }
</style>
<body>

            <div class="row">

                <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Context Classes
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>姓名</th>
                                            <th>密码</th>
                                            <th>头像</th>
                                            <th>性别</th>
                                            <th>生日</th>
                                            <th>电话</th>
                                            <th>邮箱</th>
                                            <th>积分</th>
                                            <th>公司</th>
                                            <th>证书</th>
                                            <th>简介</th>
                                            <th>评价</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->


            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->


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
