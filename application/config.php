<?php
return [
    // 根命名空间
    'root_namespace' => [
        'core' => APP_PATH . 'core',
        'module' => APP_PATH . 'module'
    ],
    
    // 禁止访问模块
    'deny_module_list' => [
        'common',
        'core',
        'module',
        'extra',
        'install',
        'laychatphone',
        'advance'
    ],
    
    'default_module' => 'advance',//默认模块	
    'default_controller' => 'Index', //默认控制器
    'default_action'         => 'index',            // 默认操作名
    'session' => [                //session设置  不同的模块设置不同的session
                    'prefix' => 'module',
                    'type' => '',
                    'auto_start' => true,
                    ],
   'log'   =>[
		//	可以临时关闭日志写入
		'type'	=>'test'
       ],

];