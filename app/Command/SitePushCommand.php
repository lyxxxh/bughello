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
use Zipkin\Reporters\Http;

/**
 * @Command
 */
class SitePushCommand extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('site:push');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
    }

    public function handle()
    {
        $this->pushVideoShow();
        $this->line('Hello Hyperf!', 'info');
    }


    protected function pushVideoShow()
    {

            $api = 'http://data.zz.baidu.com/urls?site=bughello.com&token=l7ecA54NTpPquS7J';
            $ch = curl_init();

            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => $this->videoShow(),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
            var_dump($result);exit;
    }


    protected function videoShow()
    {
        $videos = Db::table('videos')->get(['id']);
        $arr = [];
        foreach ($videos as $video)
        $arr[] =  config('app_url').'/video/'.$video->id;

        return implode(PHP_EOL, array_slice($arr,0,2000));
    }


    protected function videoPages()
    {

        $arr = [];
        $page_num = Video::count() / 21;
        for($i = 1;$i<= $page_num;$i++)
            $arr[] = config('app_url').'/video?page='.$i;
        return implode(PHP_EOL, $arr);
    }


    protected function postPages()
    {
        $arr = [];
        $page_num = Post::count() / 21;
        for($i = 1;$i<= $page_num;$i++)
        $arr[] = config('app_url').'/?page='.$i;
        return $arr;
    }

}
