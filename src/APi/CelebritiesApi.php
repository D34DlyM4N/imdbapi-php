<?php

namespace ImdbApi\Api;

use ImdbApi\Http\ApiClient;

class CelebritiesApi
{
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function get(string $id): array
    {
        return $this->client->request('GET', "/celebrities/{$id}");
    }
}