<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Model\Post;
use App\Model\Video;
use App\Service\ImgCompress;
use Hyperf\AsyncQueue\Job;
use Hyperf\DbConnection\Db;
use League\Flysystem\Filesystem;
use Psr\Container\ContainerInterface;
use Hyperf\Di\Annotation\Inject;
use TencentCloud\Cdb\V20170320\Models\VerifyRootAccountRequest;
use test\Mockery\MockingVariadicArgumentsTest;
use Xxh\FileStore\Service\FileStoreAbstract;

class VideoPicDownloadJob extends Job
{


    public $video_id;
    public function __construct($video_id)
    {
        $this->video_id = $video_id;
    }

    public function handle()
    {
        $this->filestore = resolve(FileStoreAbstract::class);
        $video = Video::find($this->video_id);
        if (!$video)
        return true;

        if( strpos($video->pic,public_upload_url()) !== false)
        return true;

        $filename = 'video/' . url_to_filename($video->pic);

  //      if ($this->filestore->fileExists($filename))
//        return true;

        $this->filestore->put($filename, file_get_contents($video->pic));
        $video->pic = public_upload_url($filename);
        $video->save();
    }




}
