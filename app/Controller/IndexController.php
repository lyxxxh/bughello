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

namespace App\Controller;

use App\Model\Post;
use Hyperf\HttpServer\Contract\RequestInterface;
use Xxh\FileStore\Service\FileStoreAbstract;

class IndexController extends AbstractController
{


    public function index(RequestInterface $request)
    {
        $posts = Post::OrderBy('view','desc')->WhereNotNull('min_img')->Filter($request->all())->paginate(15);
        return view('index',compact('posts'));
    }


    public function show($id)
    {

        $post = tap(Post::FindOrFail($id),function ($post){
            $post->previou = Post::Where('id','<',$post->id)->orderBy('id','desc')->first(['id','title']);
            $post->next = Post::Where('id','>',$post->id)->first(['id','title']);
            $post->increment('view');
        });
        return view('post.show',compact('post'));
    }


}
