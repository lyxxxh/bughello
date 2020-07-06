<?php

namespace App\Factory;

use Hyperf\Config\Annotation\Value;
use Hyperf\Guzzle\ClientFactory;
class HttpFactory {

    /**
     * @var \Hyperf\Guzzle\ClientFactory
     */
    private $clientFactory;

    protected $headers = [];
    public function __construct(ClientFactory $clientFactory)
    {
        $this->clientFactory = $clientFactory;

    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public  function post()
    {

    }

    public function createClient($options = [])
    {
        return $this->clientFactory->create($options);
    }



}
