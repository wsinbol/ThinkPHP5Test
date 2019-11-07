<?php
/*
 * @Description: 
 * @Date: 2019-11-07 11:45:55
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-07 17:17:25
 */


namespace app\index\controller\v2;
use think\Controller;
use think\Route;
/**
 * 路由文件见route.php
 */
class Index extends Controller{
    public function index(){
        dump(input());
        return 'v2 hello';
    }
}