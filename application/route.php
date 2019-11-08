<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 * #1
 * 指定版本的通用路由
 */
return [
    ':controller/:function' => 'v1.:controller/:function',
];
exit();

/**
 * #2
 * 模块-方法 的路由形式
 */
return [
    /*
    模块 => [
        方法 => module/version.controller/method
    ]
     */
    // 前台路由书写形式：<a href="{:url('@admin/index')}">{:url('@admin/index')}[]</a>
    // v1.read 表示 多级控制器调用形式
    '[admin]' => [
        'index' => ['admin/v1.read/index'],
        'read' => ['admin/v1.read/read'],
        '/' => ['admin/v1.index/index'], // 缺省的路由一定要放在最后面
    ],
];

exit();

/**
 * #2
 * 控制器-方法 路由形式
 */
// 推荐 分组路由 书写形式
return [
    /*
    控制器 => [
        方法 => 实际文件地址
    ]
    */
    '[index]' => [
        'index' => ['v1.index/index'],
        'read' => ['v1.index/read'],
        '/' => ['v1.index/index'], // 地址缺省时的路由策略
    ],
    '[read]' => [
        'index' => ['v1.read/index'],
        '/' => ['v1.read/index'], // 地址缺省时的路由策略
    ],
];

// use think\Route;

// http://localhost/tp5test/public/index.php/index/v2/index
// 显示版本号形式
// Route::get(':module/:version/index', ':module/v2.Index/index');

// 按照从上到下的顺序返回路由，所以会先返回上面那个路由
// Route::get(':module/:version/index/[:id]', ':module/v2.Index/index');

// Route::get(':controller/:version/index', 'index/v2.Index/index');

// 隐藏版本号形式
// Route::get('index/index', 'v1.index/index');


/*
return [
    // ':version/index' => 'v2.Index/index', // right

    // ':controller/:version/:function' => ':controller/v2/:function',
    ':version/index/:id' => ':version.Index/read'
];
*/
