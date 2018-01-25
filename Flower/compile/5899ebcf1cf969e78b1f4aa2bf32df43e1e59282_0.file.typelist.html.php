<?php
/* Smarty version 3.1.30, created on 2018-01-23 08:02:27
  from "E:\wamp64\www\Flower\template\admin\typelist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66ec13561628_73976399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5899ebcf1cf969e78b1f4aa2bf32df43e1e59282' => 
    array (
      0 => 'E:\\wamp64\\www\\Flower\\template\\admin\\typelist.html',
      1 => 1516591679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66ec13561628_73976399 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!--<link href="<?php echo CSS_PATH;?>
custom.css" rel="stylesheet" />-->
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
    td img{
        width: 80px;
        height: 100%;
    }
    textarea{
        resize: none;
        width: 200px;
        height: 100%;
        font-size: 12px;
        line-height: 20px;
    }

</style>
<body>

            <div class="row">

                <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">

                        <div class="panel-heading ">
                            类别管理--显示所有类别
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>标题名</th>
                                            <th>durl</th>
                                            <th>所属栏目</th>
                                            <th>缩略图</th>
                                            <th>英文名</th>
                                            <th>描述</th>
                                            <th>操作</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value;?>

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
    <!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
custom.js"><?php echo '</script'; ?>
>-->


</body>
</html>
<?php }
}
