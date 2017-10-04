<?php


namespace Panorama\Repositories;


use Predis\Client;

abstract class Model
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }
}