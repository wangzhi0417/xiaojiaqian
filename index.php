<?php
//开启调试模式
#define('APP_DEBUG',TRUE);
define( 'CMS_ROOT', dirname( __FILE__ ).'/' );
//HTML路径
define('HTML_PATH','./Public/statics/Html/');
//ThinkPHP路径
define('THINK_PATH','./ThinkPHP/');
//定义项目名称和路径
define('APP_NAME', 'App');
define('APP_PATH', './App/');
// 加载框架入口文件
require_once('360_safe3.php');
require( THINK_PATH.'ThinkPHP.php');
//require('./App/Lib/Action/Home/WebsiteFluxAction.class.php');