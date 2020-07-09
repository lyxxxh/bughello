<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Banner;
use App\Model\Post;
use App\Model\Video;
use Hyperf\DbConnection\Db;
use Hyperf\HttpServer\Contract\RequestInterface;
use Xxh\FileStore\Service\FileStoreAbstract;

class VideoController extends AbstractController
{


    public function index(RequestInterface $request)
    {


        $where = $request->all();
        unset($where['page']);

        $videos = Video::Where($where)->OrderBy('view','desc')->paginate(21);
        $banners=  Banner::all();
        return view('video.index',compact('videos','banners'));
    }

    public function show($id)
    {
        $video = Video::FindOrFail($id);
        $video->increment('view');
        $video->load('pages');
        $video->pages->map(function($page){
            $page->pages = json_decode($page->pages);
        });
        //TODO 待完善
        $video->likes = Video::Take(12)->get();
        return view('video.show',compact('video'));
    }

    public function search(RequestInterface $request)
    {
        $keyworlds = $request->input('keyworlds');
        //TODO 待update善
        $videos = Video::OrderBy('view','desc')->Where('title','like','%'.$keyworlds.'%')->limit(20)->get();
        return view('video.search',compact('videos','keyworlds'));
    }


}
