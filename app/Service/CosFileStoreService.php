<?php

namespace App\Service;


use GuzzleHttp\Psr7\Uri;
use Xxh\FileStore\Service\CosFileStoreService as BaseCos;
use function GuzzleHttp\Psr7\str;

class CosFileStoreService extends BaseCos
{


    public function getSignedUrl()
    {
        try {
          $res =  $this->getClient()->getPresignetUrl('putObject', array(
                'Bucket' => $this->config['bucket'], //存储桶，格式：BucketName-APPID
             //   'Key' => "tmp/*", //对象在存储桶中的位置，即对象键
                'Body' => '' //可为空或任意字符串
            ), '+10 minutes'); //签名的有效时间
            // 请求成功
                echo($res);
        } catch (\Exception $e) {
        //    var_dump($e);
            // 请求失败
        }

//        $url = new Uri();
//        $url->getPath();

//        return (string)($res);
    }


    public function getSts()
    {

        $config = [
            'url' => 'https://sts.tencentcloudapi.com/',
            'domain' => 'sts.tencentcloudapi.com',
            'proxy' => '',
            'secretId' => $this->config['secretId'], // 固定密钥
            'secretKey' => $this->config['secretKey'], // 固定密钥
            'bucket' => $this->config['bucket'], // 换成你的 bucket
            'region' => $this->config['region'], // 换成 bucket 所在园区
            'durationSeconds' => 1800, // 密钥有效期
            'allowPrefix' => '*',
            'allowActions' => [
                'bughello-1256267952/cos/:PutObject',
                'name/cos:PostObject',
                'name/cos:InitiateMultipartUpload',
                'name/cos:ListMultipartUploads',
                'name/cos:ListParts',
                'name/cos:UploadPart',
                'name/cos:CompleteMultipartUpload'
            ]
        ];

        $sts = new CosSts();
        return $sts->getTempKeys($config);
    }
}