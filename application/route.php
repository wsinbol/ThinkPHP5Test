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

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],
// ];
use think\Route;

// http://localhost/tp5test/public/index.php/index/v2/index
// Route::get(':module/:version/index', ':module/v2.Index/index');

// 按照从上到下的顺序返回路由，所以会先返回上面那个路由
// Route::get(':module/:version/index/[:id]', ':module/v2.Index/index');

// Route::get(':controller/:version/index', 'index/v2.Index/index');
Route::get('index/:controller/index', 'index/v2/:controller/index');


/*
return [
    // ':version/index' => 'v2.Index/index', // right

    // ':controller/:version/:function' => ':controller/v2/:function',
    ':version/index/:id' => ':version.Index/read'
];
*/
