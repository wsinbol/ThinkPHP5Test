<?php
namespace app\index\behavior;
use think\Controller;

class Index extends Controller{
    /*
    public function run(){
        echo 'behavior from index <br/>';
    }
    */

    public function isLogin($request, $extra = []){
        
        // 不执行交互操作
        /*
        echo 'module:' . $request->module().'<br>';
        echo 'controller:' . $request->controller().'<br>';
        echo 'action:' . $request->action().'<br>';
        echo 'param:'. json_encode($extra) . '<br/>';
        echo 'login status <br/>';
        */

        // 返回值给调用方
        return json_encode($extra);

        // 重定向
        /**
         * http://localhost/tp5test/public/index.php/index/v1.index/read.html
         * 默然跳转会出现上面的URL
         * 所以需要显示给出跳转地址，不暴露版本型号
         */
        // $this->success('OK', url('@read/index'));
    }
}