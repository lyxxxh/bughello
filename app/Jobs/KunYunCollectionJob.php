<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Factory\HttpFactory;
use App\Model\Post;
use App\Model\Video;
use App\Model\VideoPage;
use App\Service\ImgCompress;
use Hyperf\AsyncQueue\Job;
use League\Flysystem\Filesystem;
use Psr\Container\ContainerInterface;
use Hyperf\Di\Annotation\Inject;
use TencentCloud\Cdb\V20170320\Models\VerifyRootAccountRequest;
use test\Mockery\MockingVariadicArgumentsTest;
use Xxh\FileStore\Service\FileStoreAbstract;

class KunYunCollectionJob extends Job
{

    protected $source_url,$httpFactory,$content;
    public function __construct($source_url)
    {
        $this->source_url = $source_url;

    }

    public function handle()
    {
        $this->httpFactory = resolve(HttpFactory::class);
        $res = $this->httpFactory->createClient()->get($this->source_url);
        $content = mb_convert_encoding($res->getBody()->getContents(), 'utf-8', 'gbk');
        $this->content = $content;

        if( Video::where('source_url',$this->source_url)->first())
        return true;

        $video = new Video();
        $video->title = $this->pattern('影片名称');
        $video->area = $this->pattern('影片地区');
        $video->lang = $this->pattern('影片语言');
        $video->status = $this->pattern('影片状态');
        $video->release_date = $this->pattern('上映日期');
        $video->description = $this->pattern('影片介绍');
        $video->pic = $this->pattern('影片图片');
        $video->source_url = $this->source_url;
        $video->save();

         $this->saveVideoPages(
            $this->pattern('播放列表'),$video->id
        );
    }

    protected function saveVideoPages($content,$video_id)
    {


        $pages_pattern = '#<tr><td colspan="2" align="left" class="bt">(.*?)</table>#s';
        $page_href_pattern = '#<a>(.*?)\$(.*?)</a>#';
        if( preg_match_all($pages_pattern,$content,$res)){
            foreach ($res[1] as $r){
                $video_page = new VideoPage();
                $video_page->video_id = $video_id;

                if(! preg_match_all($page_href_pattern,$r,$pages_content))
                continue;

                $tmp_data = [];
                foreach ($pages_content[1] as $index => $page_content){
                    $tmp_data[$index]['title'] = $page_content;
                    $tmp_data[$index]['url'] = $pages_content[2][$index];
                }
                preg_match('#<h1>(.*)</h1>#',$r,$source_res);
                $video_page->source = $source_res[1] ?? 'not found';
                $video_page->pages = json_encode( $tmp_data);
                $video_page->save();
            }
        }

    }


    protected function pattern($name)
    {
        $patern_res =  'not found';
        $pattern = '/<!--'.$name.'开始代码-->(.*)<!--'.$name.'结束代码-->/s';

        if( preg_match($pattern,$this->content,$res))
        $patern_res = $res[1];

        return $patern_res;
    }


}
