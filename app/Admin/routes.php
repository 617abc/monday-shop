<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->fallback('HomeController@noFound');
    $router->get('/', 'HomeController@index');

    // 覆盖默认的用户管理
    $router->get('auth/users', 'AdminController@index');
    // 覆盖默认的操作日志
    $router->get('auth/logs', 'AdminController@indexLogs');

    // 系统的配置
    $router->resource('settings', 'SettingController')->only('index', 'show', 'edit', 'update');

    // 商品上架下架
    $router->get('products/{id}/push', 'ProductController@pushProduct');

    // 分类
    // 商品
    // 秒杀的商品管理
    $router->resource('categories', 'CategoryController');
    $router->resource('products', 'ProductController');
    $router->resource('seckills', 'SeckillController')->only('index', 'create', 'store', 'destroy');

    // 商品发货
    // 管理员帮忙确认收货
    $router->post('orders/{order}/ship', 'OrderController@ship');
    $router->patch('orders/{order}/shipped', 'OrderController@confirmShip');

    // 退款
    // 订单
    // 评论
    $router->get('orders/{order}/refund', 'OrderController@refund');
    $router->resource('orders', 'OrderController');
    $router->resource('comments', 'CommentController');

    // 会员管理
    $router->resource('users', 'UserController');


    // 积分规则, 积分等级
    $router->resource('score_rules', 'ScoreRuleController');
    $router->resource('levels', 'LevelController');

    // 富文本图片上传
    $router->post('upload/editor', 'UploadController@uploadByEditor');
    // 通过分类异步加载商品下拉列表
    $router->get('api/products', 'CategoryController@getProducts');
});
