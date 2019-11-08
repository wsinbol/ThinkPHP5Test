
# ThinkPHP 5.0 Test

- 仅包括application和extend目录下文件！
- 请在本地部署使用！

## 路由
    - 路由文件配置文件：application\route.php
    - 测试路由访问地址：http://localhost/tp5test/public/index.php/admin/read.html
    - 路由地址前端书写形式：application\admin\view\v1\read\index.html

## 依赖注入

    > 依赖注入（Dependency Injection，简称DI）是用于实现控制反转（Inversion of Control，简称IoC）的最常见的方式之一，而控制反转的目的是为了更好的解耦。

    - 操作方法中的依赖注入：application\index\controller\v1\DependencyInjection.php
    - 请求对象的属性注入方式：application\index\controller\v1\DependencyConstruct.php
