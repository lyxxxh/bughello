<?php

declare(strict_types=1);

namespace App\Command;

use App\Factory\JobFactory;
use App\Model\Video;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;
use Hyperf\Di\Annotation\Inject;
/**
 * @Command
 */
class VideoImgDownload extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;


    /**
     * @inject()
     * @var JobFactory
     */
    protected $jobFactory;


    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('videoimg:down');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
    }

    public function handle()
    {
        Video::chunk(100,function($videos){
            foreach ($videos as $video){
                $this->jobFactory->pushVideoPic($video->id);
            }
        });
        $this->line('Hello Hyperf!', 'info');
    }
}
