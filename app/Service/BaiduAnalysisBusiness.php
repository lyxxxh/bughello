<?php

namespace App\Service;


use App\Service\HttpService;

class BaiduAnalysisBusiness
{
    use BaiduAnalysisGetData;
    use HttpService;
    const GET_DATA_API = 'http://api.baidu.com/json/tongji/v1/ReportService/getData';


    protected $body = [];
    public function setAuth()
    {

        $this->body['header'] = [
            'username' => 'lyxxxh',
            'password' => 'lmxLmx123456.',
            'token' => 'b40228d420097ea5fd5cf4c56f780515',
            'account_type' => 1
        ];
        return $this;
    }

    public function send()
    {
        $this->body['body'] = $this->options;
        $res =  $this->getClient()
        ->post(self::GET_DATA_API);

        return $res->getBody()->getContents();
    }

}