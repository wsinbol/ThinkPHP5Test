<?php
/*
 * @Description: 
 * @Date: 2019-11-07 11:45:55
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-07 17:07:55
 */


namespace app\index\controller\v1;
use think\Controller;
use think\Route;

class Index extends Controller{
    public function index(){
        return 'v2 hello';
    }
}