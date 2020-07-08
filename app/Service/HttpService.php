<?php

namespace App\Service;

use Hyperf\Guzzle\ClientFactory;


trait HttpService
{
    private $clientFactory;


    public function __construct(ClientFactory $clientFactory)
    {
        $this->clientFactory = $clientFactory;
    }


    public function getClient()
    {
        return $this->clientFactory->create([
            'body' => json_encode( $this->body)
        ]);
    }

    public function getClientFactory()
    {
        return $this->clientFactory;
    }

}
