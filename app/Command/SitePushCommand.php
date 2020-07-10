<?php

declare(strict_types=1);

namespace App\Command;

use App\Model\VideoPage;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
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
        //TODO 没用
        VideoPage::chunk(2,function($videos){
            $urls = [];
            foreach ($videos as $video)
            $urls[] = 'http://bughello.com/video/'.$video->id;

            $api = 'http://data.zz.baidu.com/urls?site=bughello.com&token=l7ecA54NTpPquS7J';
            $ch = curl_init();
            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => implode("\n", $urls),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);

        });


    }

}
