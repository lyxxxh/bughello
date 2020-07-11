<?php

declare(strict_types=1);

namespace App\Command;

use App\Model\Video;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;

/**
 * @Command
 */
class DelDescriptionHtml extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('del:html');
    }

    public function configure()
    {
        Video::chunk(10,function ($viodes){
          foreach ($viodes as $viode){
              $viode->description =  strip_tags($viode->description);
              $viode->description = preg_replace('/&.*?;/i','',$viode->description);
              $viode->save();
          }
        });
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
    }

    public function handle()
    {
        $this->line('Hello Hyperf!', 'info');
    }
}
