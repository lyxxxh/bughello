<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Banner;
use App\Model\Post;
use Hyperf\HttpServer\Contract\RequestInterface;
use Xxh\FileStore\Service\FileStoreAbstract;

class VideoController extends AbstractController
{


    public function index(RequestInterface $request)
    {

        $posts = Post::OrderBy('view','desc')->WhereNotNull('min_img')->Filter($request->all())->paginate(15);
        $banners=  Banner::all();
        return view('video.index',compact('posts','banners'));
    }


}
