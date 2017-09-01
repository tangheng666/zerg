<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/*return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];*/
    use think\Route;

    //完整的路由定义规则：阿啊啊a 啊啊
    //
    //Route::rule('路由表达式','路由地址','请求类型','路由参数(数组)','变量规则(数组)');
   //GET,POST,DELETE,PUT , *
//加个|可以有多个请求类型匹配
    //Route::rule('hello','sample/Test/hello','get|post',['https'=>false ]);

   // Route::post('hello/:id','sample/Test/hello');

    //Route::post('hello','sample/Test/hello1');

    //Route::any()  表示 * 的意思
    //三段式： 模块名(api)、  控制器名(v1.Banner)、   操作方法名(getBanner)  固定的三段式.

   Route::get('banner/:id','api/v1.Banner/getBanner');
