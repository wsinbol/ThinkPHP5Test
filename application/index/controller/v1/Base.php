<?php
/*
 * @Description: 基类控制器
 * @Date: 2019-11-07 11:45:55
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-09 01:11:39
 */


namespace app\index\controller\v1;
use think\Controller;
use think\Request;

class Base extends Controller{
    /**
     * 属性注入形式实例化类
     */
    public function _initialize(){
        Request::instance()->user = new \app\index\model\User;
    }
}