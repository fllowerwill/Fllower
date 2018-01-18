<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2
 * Time: 9:25
 */

header('content-type:text/html;charset=utf8');

$str=substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/'));
define('WEB_PATH','http://'.$_SERVER['HTTP_HOST'].$str.'/');

define('ROOT_PATH',__DIR__.'/');
define('LIBS_PATH',ROOT_PATH.'libs/');
define('SRC_PATH',WEB_PATH.'scr/');


define("JS_PATH",WEB_PATH."src/js/");
define("CSS_PATH",WEB_PATH."src/css/");
define("IMG_PATH",WEB_PATH."src/img/");
define("FONT_PATH",WEB_PATH."src/font/");
define("VENDOR_PATH",WEB_PATH."src/vendor/");


require_once LIBS_PATH.'session.php';
require_once LIBS_PATH.'verification.php';
require_once LIBS_PATH.'db.php';
require_once LIBS_PATH.'admin.class.php';
include_once LIBS_PATH.'router.class.php';
include_once LIBS_PATH."Smaty/SmartyBC.class.php";

$r=new router();
$r->getInfo();
