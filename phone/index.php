<?php

/************************************************
 *
 * @param Object $App 总线程
 *
 */

// 网站根目录
define ('_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);

// app目录
define ('_App', _ROOT . 'app' . DIRECTORY_SEPARATOR);
// src目录
define ('_Src', _ROOT . 'src' . DIRECTORY_SEPARATOR);

// 控制器目录
define ('_Controller', _Src . 'Controller' . DIRECTORY_SEPARATOR);
// 模型目录
define ('_Model', _Src . 'Model' . DIRECTORY_SEPARATOR);
// 对象类目录
define ('_Class', _Src . 'Class' . DIRECTORY_SEPARATOR);
// 视图模板目录
define ('_View', _Src . 'View' . DIRECTORY_SEPARATOR);

// 载入下级目录文件标识 例如: 需载入 Model/user/vip.php 即使用 _mode('user/
define ('_PathTag', '/');

// 主机网址
define ('_Host', (empty($_SERVER["HTTPS"]) || $_SERVER['HTTPS'] == 'off' ? 'http://' : 'https://') . $_SERVER['HTTP_HOST']);
// 网站根目录网址
define ('_Http', _Host . str_ireplace('/index.php', '', $_SERVER['SCRIPT_NAME']) . '/');
// 定义网站静态资源目录
define ("_Web", _Http . 'web/');

define ("_WebAdmin", _Http . 'web/admin/');

// 来源
define('HTTP_REFERER', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');


include(_App . 'Config.php');
include(_App . 'App.php');

// 总线程 **********************************************************
$App = new App();

// URL分析开启网站进程
$App -> Process = new Process();
$App -> Process -> ProcessStart();
// $_SESSION['userid'] = 1;
$App -> Process -> ControllerStart();




?>