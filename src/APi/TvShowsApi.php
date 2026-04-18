<?php

namespace ImdbApi\Api;

use ImdbApi\Http\ApiClient;

class TvShowsApi
{
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function get(string $id): array
    {
        return $this->client->request('GET', "/tvshows/{$id}");
    }

    public function popular(): array
    {
        return $this->client->request('GET', "/tvshows/popular");
    }
}