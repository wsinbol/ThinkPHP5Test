<?php
/*
 * @Description: 依赖注入相关demo
 * 依赖注入（Dependency Injection，简称DI）是用于实现控制反转（Inversion of Control，简称IoC）
 * 的最常见的方式之一，而控制反转的目的是为了更好的解耦。
 * @Date: 2019-11-08 22:48:45
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-09 01:26:26
 */
namespace app\index\controller\v1;

use app\index\controller\v1\Base;
use think\Request;
use think\Controller;
// use app\index\model\User;

/**
 * 通过 架构函数 注入对象
 * 这样做不需要重复实例化，而且作用域是整个类
 * 而 函数方法注入 形式则作用在函数内
 */
class DependencyConstruct extends Base{
    
    /**
     * 以类的属性形式创建 类 的实例， 并在初始化函数中对其赋值
     */
    protected $user;

    /**
     * 此方法可以直接使用，但不是本文重点
     */
    /*
    public function _initialize(){
        $this->user = new \app\index\model\User;
    }
    */

    public function _initialize(){
        parent::_initialize(); // 当前类的_initialize覆盖父类同名函数，所以此处显示调用
        $this->user = Request::instance()->user;
    }

    public function show(){
        return $this->user->getUser();
    }
}