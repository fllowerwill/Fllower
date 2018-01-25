<?php
/* Smarty version 3.1.30, created on 2018-01-23 08:02:35
  from "E:\wamp64\www\Flower\template\admin\addtype.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66ec1b509f49_97286321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665d3c2c28a7271d79ac09b9acb11568c73a7ac9' => 
    array (
      0 => 'E:\\wamp64\\www\\Flower\\template\\admin\\addtype.html',
      1 => 1516591900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66ec1b509f49_97286321 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo CSS_PATH;?>
bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo CSS_PATH;?>
font-awesome.css" rel="stylesheet"/>
    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo CSS_PATH;?>
bootstrap-fileupload.min.css" rel="stylesheet"/>
    <!--CUSTOM BASIC STYLES-->
    <link href="<?php echo CSS_PATH;?>
basic.css" rel="stylesheet"/>
    <!--CUSTOM MAIN STYLES-->


</head>
<style>
    textarea{
        resize: none;
    }
    .panel-body{
        margin: 0 auto;
    }
</style>
<body>
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-body">
                <form action="index.php?m=admin&f=type&a=add" method='post' enctype="multipart/form-data">
                    <div class="form-group">
                        <label>所属类别</label>
                        <select class="form-control" name='pid'>
                            <!--<option>One Vale</option>-->
                            <!--<option>Two Vale</option>-->
                            <!--<option>Three Vale</option>-->
                            <!--<option>Four Vale</option>-->
                            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>类别名</label>
                        <input class="form-control" type="text" name='title'>

                    </div>
                    <div class="form-group">
                        <label>类别英文</label>
                        <input class="form-control" type="text" name='english'>

                    </div>
                    <div class="form-group">
                        <label>durl</label>
                        <input class="form-control" type="text" name='durl'>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">上传图片</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo IMG_PATH;?>
demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">选择图片</span><span class="fileupload-exists">更改图片</span><input type="file" name='image[]'></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">移除</a>
                                </div>
                            </div>
                        </div>
                        <!--<input type="file" name='image'>-->
                    </div>
                    <div class="form-group">
                        <label>描述</label>
                        <textarea class="form-control" rows="3" name='descs'></textarea>
                    </div>


                    <button type="submit" class="btn btn-info">提交</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<!-- BOOTSTRAP SCRIPTS -->
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/bootstrap.js"><?php echo '</script'; ?>
>
<!-- PAGE LEVEL SCRIPTS -->
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/bootstrap-fileupload.js"><?php echo '</script'; ?>
>
<!-- METISMENU SCRIPTS -->
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.metisMenu.js"><?php echo '</script'; ?>
>
<!-- CUSTOM SCRIPTS -->


</body>
</html>
<?php }
}
