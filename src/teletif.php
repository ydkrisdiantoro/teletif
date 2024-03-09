<?php

namespace Vonslab\Teletif;

use GuzzleHttp\Client;

class Teletif
{
    protected $client;
    
    public function __construct()
    {
        $this->client = new Client();
    }
    
    public function send($method, $url, $options = [])
    {
        return $this->client->request($method, $url, $options);
    }
}