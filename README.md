
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
- 测试URL：http://localhost/tp5test/public/index.php/dependency_construct/show.html

## 行为&钩子
- 自定义行为：application\index\behavior\Index.php
- 钩子的注册：application\common.php (官方推荐方式，其实只要放在监听位置之前都是OK的)
- 钩子的监听：application\index\controller\v1\Base.php
- 测试URL：http://localhost/tp5test/public/index.php/index/read
- 配置文件方式绑定行为：application\tags.php

## 日志
- 日志配置文件：application\config.php
- 关闭日志方式: 'log' => ['type' => 'test'],
- 日志驱动：
    - File驱动：file方式记录的日志文件会自动生成日期子目录
    - Socket驱动
- 日志写入
    - Log::record() 记录日志信息到内存
    - Log::save() 把保存在内存中的日志信息（用指定的记录方式）写入
    - Log::write() 实时写入一条日志信息
- 日志级别
    - log 常规日志，用于记录日志
    - error 错误，一般会导致程序的终止
    - notice 警告，程序可以运行但是还不够完美的错误
    - info 信息，程序输出信息
    - debug 调试，用于调试信息
    - sql SQL语句，用于SQL记录，只在数据库的调试模式开启时有效
- 单文件日志 日志文件不再区分日期文件写入，而是统一写入到 single.log 文件中。
```
'log'   => [
    'type'  => 'File',
    // 日志记录级别，使用数组表示
    'single' => true,
],
```

- 独立日志 仅支持File类型的日志驱动，设置后，就会单独生成error 和 sql两个类型的日志文件，主日志文件中将不再包含这两个级别的日志信息。
```
'log'   => [
    'type'          => 'file', 
    // error和sql日志单独记录
    'apart_level'   =>  ['error','sql'],
],
```