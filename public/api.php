<?php
// +----------------------------------------------------------------------
//给第三方的项目

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 定义配置文件目录
define('CONF_PATH', __DIR__ . '/../conf/');

// 绑定模块
define('BIND_MODULE','api');



// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
