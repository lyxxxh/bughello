<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Banner;
use App\Model\Post;
use App\Model\Video;
use Hyperf\HttpServer\Contract\RequestInterface;
use Xxh\FileStore\Service\FileStoreAbstract;

class VideoController extends AbstractController
{


    public function index(RequestInterface $request)
    {

        $videos = Video::OrderBy('view','desc')->paginate(21);
        $banners=  Banner::all();
        return view('video.index',compact('videos','banners'));
    }


}
