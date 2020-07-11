<?php

declare(strict_types=1);

namespace App\Command;

use App\Factory\HttpFactory;
use App\Factory\JobFactory;
use App\Model\Post;
use Carbon\Carbon;
use http\Exception\RuntimeException;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Hyperf\DbConnection\Db;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Exception\Handler\CollectionExcpetionHandler;
use Hyperf\Di\Annotation\Inject;

/**
 * @Command
 */
class CollectionBiliImgCommand extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @inject()
     * @var HttpFactory
     */
    protected $httpFactory;

    /**
     * @inject()
     * @var JobFactory
     */
    protected $jobFactory;


    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('bili:img');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('采集哔哩哔哩up主的相簿');
    }


    public function handle()
    {
        $insert_datas = [];
        $user_id = $this->input->getArgument('user_id');
        $url = 'http://api.vc.bilibili.com/link_draw/v1/doc/doc_list?uid='.$user_id.'&page_num=1&page_size=900&biz=all';


        $content = $this->httpFactory->createClient()->get($url)->getBody()->getContents();
        $content = json_decode($content);
        if( $content->code != 0)
        throw new RuntimeException('获取失败 状态为0');

        foreach ($content->data->items as $data)
        {

            $pictures =  array_column($data->pictures,'img_src');
            $this->jobFactory->pushImgDownload(
                $pictures,$url
            );

            foreach ($pictures as $key => $picture)
            $pictures[$key] = url_to_filename($picture);

            $insert_datas[] = [
                'title' => $data->description,//bili的title压根没有内容
                'content' => json_encode($pictures),
                'source_url' => "https://space.bilibili.com/$user_id/album",
                'type' => Post::TYPE_IMG,
                'img' => $pictures[0] ?? '',
                'created_at' => Carbon::now()->toDateTimeString()
            ];
        }
        $post = new Post();
        $this->uniquePost($post,$insert_datas);
        $post->insertAll($insert_datas);

        $this->line('采集完成', 'info');
    }

    protected function uniquePost($post,&$datas)
    {
        foreach ($datas as $key => $data)
        if( Db::table($post->getTable())->where('title',$data['title'])->first())
        unset($datas[$key]);
    }

    protected function getArguments()
    {
        return [
            ['user_id', InputArgument::OPTIONAL, 'up主的用户id']
        ];
    }

}

