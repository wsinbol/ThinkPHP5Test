<?php
/*
 * @Description: 基类控制器
 * @Date: 2019-11-07 11:45:55
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-12 15:51:56
 */


namespace app\index\controller\v1;
use think\Controller;
use think\Request;
use think\Hook;

class Base extends Controller{
    /**
     * 属性注入形式实例化类
     */
    public function _initialize(){
        $request = Request::instance();
        $request->user = new \app\index\model\User;
        $request->email = new \app\index\model\Email;

        //钩子的注册在application\common.php中，也可以在此处注册

        // 监听钩子，并得到钩子处理后的结果，返回的是数组类型
        $rs = Hook::listen('is_login', $request, $extra = ["name" => "wang", "age" => 10]);
        dump($rs);
    }
}