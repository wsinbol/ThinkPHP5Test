<?php
/*
 * @Description: 
 * @Date: 2019-11-08 11:08:20
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-08 11:43:24
 */

namespace app\admin\controller\v1;
use think\Controller;

class Read extends Controller{
    public function index(){
        return view();
        // return 'v1 admin read index';
    }

    public function read(){
        return view();
        // return 'v1 admin read read';
    }
}
