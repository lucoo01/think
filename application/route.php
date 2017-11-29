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

use think\Route;
// 注册路由到index模块的News控制器的read操作
Route::rule('about','index/about.about/index');


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    // '[about]'     => [
    //     ':id'   => ['index/about', ['method' => 'get'], ['id' => '\d+']],
    //     ':name' => ['index/hello', ['method' => 'post']],
    // ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
