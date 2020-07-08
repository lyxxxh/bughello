<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

use Hyperf\HttpServer\Router\Router;

Router::get('/', 'App\Controller\IndexController@index');

Router::get('/post/{id}','App\Controller\IndexController@show');

Router::get('/video','App\Controller\VideoController@index');

Router::get('/about', function (){
    return view('about');
});



Router::addGroup(
    '/admin', function () {
        Router::get('/get_analysis_count','App\Controller\Admin\HomeController@getAnalysisCount');
        Router::get('/get_post_sum','App\Controller\Admin\HomeController@getPostSum');
        Router::post('/upload_file','App\Controller\Admin\HomeController@uploadFile');
},
    ['middleware' => [\App\Middleware\AdminCheckMiddleWare::class]]
);