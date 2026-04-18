<?php

namespace ImdbApi;

use ImdbApi\Api\TitlesApi;

class ImdbApi
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function titles()
    {
        return new TitlesApi($this->client);
    }
}