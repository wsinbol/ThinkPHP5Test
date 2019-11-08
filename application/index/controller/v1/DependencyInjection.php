<?php
/*
 * @Description: 依赖注入相关demo
 * 依赖注入（Dependency Injection，简称DI）是用于实现控制反转（Inversion of Control，简称IoC）
 * 的最常见的方式之一，而控制反转的目的是为了更好的解耦。
 * @Date: 2019-11-08 22:48:45
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-09 00:18:54
 */
namespace app\index\controller\v1;

use think\Controller;
use think\Request;
use app\index\model\User;

class DependencyInjection extends Controller{
    /**
     * 操作方法注入 形式
     * 使用前需要先 use app\index\model\User;
     * 然后在方法中注入模型类
     */
    public function functionInjection(User $user){
        return $user->getUser();
    }
}
