<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
return [
    '__pattern__' => [
        'name' => '\w+'
    ],
    
 
    

    
    // 后台
    'module/:_module_/:_controller_/:_action_' => 'manage/loader/run',
    'admin'=>'manage/start/login',
    //AM聊天
    'service'=>'laychatphone/Login/index',
    
    //advance
    'Allianz'=>'advance/Index/index',
    'services/:id'=>'advance/Index/service_details',
    'mobile_form/:id'=>'advance/Index/mobile_form'

];
