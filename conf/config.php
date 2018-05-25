<?php
use think\Env;
    // 文件配置
    return [
       
	    'app_debug'              => true,
	    // 应用Trace
	    'app_trace'              => true,
	
		// 默认模块名
	    'default_module'         => 'home',
	    // 禁止访问模块
	    'deny_module_list'       => ['common'],
	    // 默认控制器名
	    'default_controller'     => 'Index',
	    // 默认操作名
        'default_action'         => 'index',
         'extra_file_list'        => [THINK_PATH . 'helper' . EXT, APP_PATH.'/common/common/function.php'],
	   
    ];