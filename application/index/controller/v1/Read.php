<?php
/*
 * @Description: 
 * @Date: 2019-11-07 11:45:55
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-18 21:10:21
 */


namespace app\index\controller\v1;
use think\Controller;
use think\Route;
use think\Hook;
use think\Request;

/**
 * Base 不需要use
 */
class Read extends Base{

    /**
     * 定义当前控制器所需要实例化的类
     */

    protected $user;

    public function _initialize(){
        parent::_initialize(); // 当前类的_initialize覆盖父类同名函数，所以此处显示调用
        $this->user = Request::instance()->user;
        $this->email = Request::instance()->email;
    }

    public function index(){
        echo $this->user->getUser();
        return 'v1 hello';
    }

    public function read(){
        
        return 'v1 read!';
    }
}