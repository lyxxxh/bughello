<?php

namespace App\Factory;

use App\Job\ImgDownloadJob;
use Hyperf\AsyncQueue\Driver\DriverFactory;
use Hyperf\AsyncQueue\Driver\DriverInterface;
use Hyperf\Di\Annotation\Inject;
class JobFactory
{

    /**
     * @var DriverInterface
     */
    protected $driver;

    public function __construct(DriverFactory $driverFactory)
    {
        $this->driver = $driverFactory->get('default');
    }


    /**
     * 生产消息.
     * @param $imgs_url 图片路径
     * @param $source_url 从哪里采集的
     */
    public function pushImgDownload(array  $imgs_url,$source_url): bool
    {
        return $this->driver->push(new \App\Jobs\ImgDownloadJob($imgs_url,$source_url),0);
    }





}