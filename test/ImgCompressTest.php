<?php

class ImgCompressTest extends \HyperfTest\HttpTestCase
{
    public function testCompress()
    {
        $source =  BASE_PATH.'/public/1.jpg';//原图片名称
        $dst_img = BASE_PATH.'/public/text.png';//压缩后图片的名称
        $source = file_get_contents($source);
        $percent = 0.1;  #原图压缩，不缩放，但体积大大降低

        $image = (new \App\Service\ImgCompress($source,$percent))->compressImg($dst_img);
        var_dump(strlen($image));
    }
}