<?php

declare(strict_types=1);

namespace App\Command;

use App\Model\Post;
use App\Model\Video;
use App\Model\VideoPage;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Hyperf\DbConnection\Db;
use Psr\Container\ContainerInterface;

/**
 * @Command
 */
class SiteMapCommand extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('site:map');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
    }

    public function handle()
    {
        file_put_contents(BASE_PATH.'/public/site_map/video_page.txt',$this->videoPages());
        file_put_contents(BASE_PATH.'/public/site_map/video_show.txt',$this->videoShow());
        file_put_contents(BASE_PATH.'/public/site_map/post_page.txt',$this->videoShow());
        file_put_contents(BASE_PATH.'/public/site_map/post_show.txt',$this->videoShow());
        $this->line('Hello Hyperf!', 'info');
    }

    protected function postShow()
    {
        $videos = Db::table('posts')->get(['id']);
        $arr = [];
        foreach ($videos as $video)
        $arr[] =  config('app_url').'/'.$video->id;
        return implode(PHP_EOL, $arr);
    }

    protected function postPages()
    {
        $arr = [];
        $page_num = Post::count() / 21;
        for($i = 1;$i<= $page_num;$i++)
        $arr[] = config('app_url').'/?page='.$i;
        return implode(PHP_EOL, $arr);
    }


    protected function videoShow()
    {
        $videos = Db::table('videos')->get(['id']);
        $arr = [];
        foreach ($videos as $video)
        $arr[] =  config('app_url').'/video/'.$video->id;
        return implode(PHP_EOL, $arr);
    }

    protected function videoPages()
    {

        $arr = [];
        $page_num = Video::count() / 21;
        for($i = 1;$i<= $page_num;$i++)
        $arr[] = config('app_url').'/video?page='.$i;
        return implode(PHP_EOL, $arr);
    }



}
