<?php

declare(strict_types=1);

namespace App\Middleware;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\Exception\Handler\AdminErrorHandle;
class AdminCheckMiddleWare implements MiddlewareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }


    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {

//        $token = $request->getHeader('token')[0];
//        if(  $token != config('admin.token') )
//        return response()->json([
//           'data' => 'token不正确'
//        ])->withStatus(400);


        return $handler->handle($request);
    }
}