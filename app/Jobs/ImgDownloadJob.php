<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Model\Post;
use App\Service\ImgCompress;
use Hyperf\AsyncQueue\Job;
use League\Flysystem\Filesystem;
use Psr\Container\ContainerInterface;
use Hyperf\Di\Annotation\Inject;
use TencentCloud\Cdb\V20170320\Models\VerifyRootAccountRequest;
use test\Mockery\MockingVariadicArgumentsTest;
use Xxh\FileStore\Service\FileStoreAbstract;

class ImgDownloadJob extends Job
{

    public $filestore;
    public $imgs_url;
    public $source_url;
    public function __construct($imgs_url,$source_url)
    {
        $this->imgs_url = $imgs_url;
        $this->source_url = $source_url;
//        $this->filesystem = resolve(Filesystem::class); 不能传入闭包
    }

    public function handle()
    {
        $this->filestore = resolve(FileStoreAbstract::class);
        foreach ($this->imgs_url as $key => $img_url){
            $filename = url_to_filename($img_url);
            if( $key == 0)
            $this->updatePostImg($img_url,$filename);

            if(! $this->filestore->fileExists($filename))
             $this->filestore->put($filename,
              file_get_contents($img_url)
            );

        }
    }

    //修改略缩图
    protected function updatePostImg($img_url,$filename)
    {

        $post = Post::Where('img',$filename)->whereNull('min_img')->first();
        if( $post == null)
        return true;

        $local_savePath = BASE_PATH.'/public/min_image/'.$filename;
       
        if(! is_dir(dirname($local_savePath)))
        mkdir(dirname($local_savePath),0777,true);

	
        if(! file_exists($local_savePath)){
      
        $imgCompress = new ImgCompress((
            file_get_contents($img_url)
        ),.3);
        $imgCompress->compressImg($local_savePath);
	}

        $filename = 'min_'.$filename;
        $this->filestore->put(
            $filename,file_get_contents($local_savePath)
        );

        $post->min_img = $filename;
        $post->save();
    }



}
