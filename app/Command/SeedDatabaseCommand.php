<?php

declare(strict_types=1);

namespace App\Command;

use App\Model\Banner;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;

/**
 * @Command
 */
class SeedDatabaseCommand extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('db:seed');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
    }

    public function handle()
    {
        $this->banner();
        $this->line('Hello Hyperf!', 'info');
    }

    protected function banner()
    {
        for($i = 0; $i <= 3; $i++){
            Banner::create([
               'title' => rand(1,5555),
               'pic' => 'http://img.kuyun88.com/pic/uploadimg/2019-12/1869.jpg',
            ]);
        }
    }
}
