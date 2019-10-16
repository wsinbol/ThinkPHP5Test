<?php
/*
 * @Description: 测试类库引入方法
 * @Date: 2019-10-16 09:37:34
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-10-16 17:23:33
 */
namespace app\index\controller;
use think\Controller;
use think\Loader;
// 引入类库实际位置：\extend\First\Second.php
use First\Second;

class ImportPackage extends Controller{
    /**
     * @description: 命名空间调用法，直接实例化法
     * 引入的类一定要包含命名空间
     * 使用use引入需要的类
     * 实例化类前一定不要添加'\'
     */
    public function index(){
        $api = new Second();
        $api->sayHello();
    }
    /**
     * @description: 包含路径的实例化类方法
     * 引入的类一定要包含命名空间
     * 用不用use都可以，推荐不用
     * 实例化类前一定要添加'\'
     */
    public function test(){
        $api = new \First\Second();
        $api->sayHello();
    }
    
    /**
     * @description: Loader::import引入方式
     * 引入的类一定不要包含命名空间
     * 实例化类前一定要添加'\'
     * 用不用use都可以，推荐不用
     */
    public function demo(){
        Loader::import('First.Second');
        // import('First.Second');
        // thinkphp5.1环境下上述代码不可执行，查阅文档发现tp5.1貌似不支持手动导入类库的方式，全部用命名空间方式
        $api = new \Second();
        $api->sayHello();
    }
    /**
     * @description: EXTEND_PATH import引入方式
     * 引入的类一定不要包含命名空间
     * 用不用use都可以，推荐不用
     * 实例化类前一定要添加'\'
     */
    public function work(){
        // import('文件名：和类名保持一致','类名路径')
        import('Second',EXTEND_PATH.'First');
        $api = new \Second();
        $api->sayHello();
    }
}

