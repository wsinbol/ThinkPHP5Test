<?php
/*
 * @Description: 
 * @Date: 2019-11-07 11:45:55
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-11 15:11:46
 */

namespace app\index\controller\v1;
use think\Controller;
use think\Route;
use think\Hook;
use think\Request;
use think\Cookie;
use think\Cache;

/**
 * Base 不需要use
 */
class Index extends Base{

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
        
        Cookie::set('user_name', 'wang', 0);
        // 前端模板的文件路径也需要添加版本号
        return $this->fetch();
        
        // return 'v1 hello';
    }

    public function read(){
        echo Cookie::get('user_name') . '<br />';
        
        return 'v1 read';
    }
}