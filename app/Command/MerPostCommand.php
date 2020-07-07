<?php

declare(strict_types=1);

namespace App\Command;

use App\Model\Post;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Psr\Container\ContainerInterface;

/**
 * @Command
 */
class MerPostCommand extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('post:mer');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
    }


    private $content = [];
    private $num = 1;
    public function handle()
    {

        $posts = Post::all();
            foreach ($posts as $post){

                $contents = json_decode($post->content);
                if( count($contents) >= 12)
                continue;

                foreach ($contents as $content)
                $this->content[] = $content;

                if( count($this->content) >= 12){

                    $post->title = '二次元图片(12p) ('.$this->num ++ .')';
                    $post->content = json_encode($this->content);
                    $this->content = [];
                    $post->save();
                    continue;
                }
                $post->delete();

            }


        $this->line('Hello Hyperf!', 'info');
    }
}
