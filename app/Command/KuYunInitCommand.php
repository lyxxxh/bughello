<?php

declare(strict_types=1);

namespace App\Command;

use App\Factory\HttpFactory;
use App\Factory\JobFactory;
use App\Service\HttpService;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Command\Annotation\Command;
use Illuminate\Support\Facades\App;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Input\InputArgument;
use Hyperf\Di\Annotation\Inject;


/**
 * @Command
 */
class KuYunInitCommand extends HyperfCommand
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

        parent::__construct('kuyun:init');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
    }

    public function handle()
    {

        $type = $this->input->getArgument('type');
        $count = $this->input->getArgument('num') ?? 0;
        $kunyun_url = 'http://www.kuyunzy1.com';
        $pattern = '#<td height="25" align="left"><a href="(.*?)"#';
        for ($i = 1;$i <= $count; $i++){
            $url = sprintf('http://www.kuyunzy1.com/list/?%d-%d.html',$type,$i);
            $res = $this->httpFactory->createClient()->get($url);
            $content = mb_convert_encoding($res->getBody()->getContents(), 'utf-8', 'gbk');
            $pattern_res = preg_match_all($pattern,$content,$res);

            if( $pattern_res)
            foreach ($res[1] as $r)
            $this->jobFactory->pushKunYunCollection($kunyun_url.$r);
        }

        $this->line('Hello Hyperf!', 'info');
    }

    protected function getArguments()
    {
        return [
            ['type', InputArgument::OPTIONAL, '...'],
            ['num', InputArgument::OPTIONAL, '...']
        ];
    }
}
