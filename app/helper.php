<?php
use Hyperf\Utils\ApplicationContext;
use Xxh\FileStore\Service\FileStoreAbstract;

if (!function_exists('container')) {
    function container()
    {
        return ApplicationContext::getContainer();
    }
}


//习惯lar了
if(! function_exists('view')){

    function view($view,$compact = [])
    {

        return app(\Hyperf\View\RenderInterface::class)->render($view,$compact);
    }
}

//习惯lar了
if(! function_exists('resolve')){
    function resolve($abstract)
    {
        return app($abstract);
    }
}
//习惯lar了
if(! function_exists('url_to_filename')){
    function url_to_filename($url)
    {
        $extension = '';
        $url_arr = explode('.',$url);
        if( $url_arr > 1)
        $extension = '.'.end($url_arr);

       return md5($url).$extension;
    }
}


//习惯lar了
if(! function_exists('public_upload_url')){
    function public_upload_url($url)
    {
    return 'http://bughello.lblog.club/collection/'.$url;  
    return 'https://bughello-1256267952.cos.ap-chengdu.myqcloud.com/collection/'.$url;
        return resolve(FileStoreAbstract::class)->url($url);
//        return '/upload/'.$url;
    }
}

if (!function_exists('request')) {
    function request()
    {
        return app(\Psr\Http\Message\ServerRequestInterface::class);
    }
}



if (!function_exists('redis')) {
    function redis()
    {
        return app(
            Hyperf\Redis\Redis::class
        );
    }
}


if (!function_exists('app')) {
    function app($name)
    {
        return Hyperf\Utils\ApplicationContext::getContainer()->get(
                $name
        );
    }
}

if (!function_exists('response')) {
    function response()
    {
        return app(
            Hyperf\HttpServer\Contract\ResponseInterface::class
        );
    }
}