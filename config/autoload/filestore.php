<?php

return [


    // 将配置更换成你的  
    'oss' => [
        'appid' => '',
        'appsec' => '',
        'bucket' => '',
        'endpoint' => '',
        'socket_timeout' => '5184000', // 设置Socket层传输数据的超时时间
        'connection_timeout' => '10', //建立链接的超时时间
        'save_path' => 'tem/storage/',  //存储目录   
     ],

   
     'cos' => [    
        'secretId' => 'AKIDDPVNzNHWoreDXcI7j7HEzZv75pPkmkQ4',   //
        'secretKey' => env('COS_KEY'),
        'bucket' => 'bughello-1256267952',
        'region' => 'ap-chengdu',
        'save_path' => 'collection/'//存储目录
    ]


];