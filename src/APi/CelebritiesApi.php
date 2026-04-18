<?php

namespace ImdbApi\Api;

use ImdbApi\Http\ApiClient;

class CelebritiesApi
{
    public function __construct(private ApiClient $client) {}

    public function get(string $id): array
    {
        return $this->client->request('GET', "/celebrities/{$id}");
    }
}