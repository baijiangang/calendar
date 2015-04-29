<?php
#test
#绝对路径 可以加快文件加载速度
$basedir = dirname(__FILE__)."/";
define("THINK_PATH", $basedir."ThinkPHP3.2.2/");
define("APP_PATH",   $basedir);
define("APP_DEBUG",  true); #开启调试模式
//定义默认模块
define('BIND_MODULE','Home');
// 如果代理是转发过来的请求，使用代理的host
define('APP_URL', isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? 'http://'.$_SERVER['HTTP_X_FORWARDED_HOST'].'/q' : (isset($_SERVER['HTTP_HOST']) ? 'http://'.$_SERVER['HTTP_HOST'] : ''));
require_once THINK_PATH."ThinkPHP.php";