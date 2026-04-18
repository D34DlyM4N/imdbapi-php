<?php

namespace ImdbApi\Api;

use ImdbApi\Http\ApiClient;

class TvShowsApi
{
    public function __construct(private ApiClient $client) {}

    public function get(string $id): array
    {
        return $this->client->request('GET', "/tvshows/{$id}");
    }

    public function popular(): array
    {
        return $this->client->request('GET', "/tvshows/popular");
    }
}