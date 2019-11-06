<?php
/*
 * @Description: 粗略限制同一IP访问次数
 * @Date: 2019-11-06 14:27:33
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-06 17:01:30
 */

namespace app\index\controller;

use think\Controller;
use think\Session;

class LimitIp extends Controller
{
    /**
     * 浏览器关闭后重新访问则从1开始计数，无法有效防止防止频繁刷新
     * 所以需要借助数据库 或 nginx 进行限制
     */
    public function index()
    {
        Session::init([
            'prefix'         => 'module',
            'type'           => '',
            'auto_start'     => true,
            'expire' => 360000
        ]);
        
        Session::set('ip_count', Session::get('ip_count') + 1);
        if (Session::get('ip_count') > 10) {
            return $this->request->ip()."禁止访问，刷新次数过多";
        } else {
            return $this->request->ip() . ":您已经刷新次数：" . Session::get('ip_count');
        }
    }

    public function show()
    {
        return Session::get('ip_count');
    }
}
