<?php
/* Smarty version 3.1.30, created on 2018-01-23 08:14:06
  from "E:\wamp64\www\Flower\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66eece7cd003_36704214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7c140e5f2bb990aa81245bd2f85ba3555a4a468' => 
    array (
      0 => 'E:\\wamp64\\www\\Flower\\template\\admin\\login.html',
      1 => 1516695244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66eece7cd003_36704214 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>登录页面</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo CSS_PATH;?>
bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo CSS_PATH;?>
font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>/*
        body{
            background-image:url("../../src/img/ban.jpg");
        }*/
    </style>
</head>
<body>
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role='form' action='index.php?m=admin&a=check' method='post'>
                                    <hr />
                                    <h5>登录花卉志管理系统</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="请输入用户名 " name='user' />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="password" class="form-control"  placeholder="请输入密码"   name='pass'/>
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> 记住密码
                                            </label>
                                            <span class="pull-right">
                                                   <a href="" >忘记密码</a>
                                            </span>
                                        </div>

                                     <input type='submit' class="btn btn-primary ">

                                    </form>
                            </div>
                           
                        </div>

                
        </div>
    </div>

</body>
</html>
<?php }
}
