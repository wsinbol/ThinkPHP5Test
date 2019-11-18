<?php
/*
 * @Description: 日志类
 * @Date: 2019-11-18 21:12:02
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-18 21:42:07
 */

namespace app\index\controller\v1;

use think\Log;
use think\Controller;

class LogTest extends Controller{
    public function index(){
        Log::init([
            'type'  =>  'File',
            'level' => ['log'],
        ]);
        
        Log::record('record-测试日志信息');
        /*
        [ 2019-11-18T21:38:30+08:00 ] 0.0.0.0 GET localhost/tp5test/public/index.php/log_test/index
        [运行时间：0.031677s] [吞吐率：31.57req/s] [内存消耗：2,586.94kb] [文件加载：37]
        [ log ] record-测试日志信息
        */
        return 'Hi, log!';
        
    }
}