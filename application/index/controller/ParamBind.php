<?php
/*
 * @Description: 参数绑定:方法参数绑定是把URL地址（或者路由地址）中的变量作为操作方法的参数直接传入。
 * @Date: 2019-11-05 17:05:17
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-11-05 17:17:52
 */
namespace app\index\controller;
class ParamBind{
    /**
     * 1.PATH_INFO模式：不传入任何参数：
     * http://localhost/tp5test/public/index/param_bind/index
     * http://localhost/tp5test/public/index/param_bind/index/id
     * 报错 方法参数错误:id
     * 2.普通模式：携带id,不给id传值都可以
     * 可用：http://localhost/tp5test/public/index/param_bind/index?id
     * 正确：http://localhost/tp5test/public/index/param_bind/index?id=5
     * 3.推荐方法：
     * 为$id设置默认值，下方内容替换为`public function index($id=0)`
     */
    public function index($id){
        dump(input());
        return 'id:'.$id;

    }
}
