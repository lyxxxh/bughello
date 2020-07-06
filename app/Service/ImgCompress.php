<?php


namespace App\Service;
/**
 * 图片压缩类：通过缩放来压缩。
 * 如果要保持源图比例，把参数$percent保持为1即可。
 * 即使原比例压缩，也可大幅度缩小。数码相机4M图片。也可以缩为700KB左右。如果缩小比例，则体积会更小。
 *
 * 结果：可保存、可直接显示。
 */
class ImgCompress{

    private $source_str;
    private $image;
    private $imageinfo;
    private $percent = 0.5;
    /**
     * 图片压缩
     * @param $source_str 源字符串
     * @param float $percent  压缩比例
     */
    public function __construct($source_str, $percent=1)
    {
        $this->source_str = $source_str;
        $this->percent = $percent;
    }

    public function compressImg($saveName='')
    {
        $this->_openImage();

        if(!empty($saveName))
        return $this->_saveImage($saveName);  //保存
    }

    /**
     * 内部：打开图片
     */
    private function _openImage()
    {
        list($width, $height, $type, $attr) = getimagesizefromstring($this->source_str);
        $this->imageinfo = array(
            'width'=>$width,
            'height'=>$height,
            'type'=>image_type_to_extension($type,false),
            'attr'=>$attr
        );
        $this->image = imagecreatefromstring($this->source_str);
        $this->_thumpImage();
    }


    /**
     * 内部：操作图片
     */
    private function _thumpImage()
    {
        $new_width = $this->imageinfo['width'] * $this->percent;
        $new_height = $this->imageinfo['height'] * $this->percent;
        $image_thump = imagecreatetruecolor($new_width,$new_height);
        //将原图复制带图片载体上面，并且按照一定比例压缩,极大的保持了清晰度
        imagecopyresampled($image_thump,$this->image,0,0,0,0,$new_width,$new_height,$this->imageinfo['width'],$this->imageinfo['height']);
        imagedestroy($this->image);
        $this->image = $image_thump;
    }



    /**
     * 保存图片到硬盘：
     * @param  string $dstImgName  1、可指定字符串不带后缀的名称，使用源图扩展名 。2、直接指定目标图片名带扩展名。
     */
    private function _saveImage($dstImgName)
    {
        $funcs = "image".$this->imageinfo['type'];
        $funcs($this->image,$dstImgName);
    }


    /**
     * 销毁图片
     */
    public function __destruct(){
        imagedestroy($this->image);
    }

}

