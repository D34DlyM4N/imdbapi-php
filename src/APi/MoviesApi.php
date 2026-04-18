<?php

namespace ImdbApi\Api;

use ImdbApi\Http\ApiClient;

class MoviesApi
{
    public function __construct(private ApiClient $client) {}

    public function get(string $id): array
    {
        return $this->client->request('GET', "/movies/{$id}");
    }

    public function search(string $query): array
    {
        return $this->client->request('GET', "/movies/search", [
            'query' => $query
        ]);
    }

    public function topRated(): array
    {
        return $this->client->request('GET', "/movies/top-rated");
    }

    public function popular(): array
    {
        return $this->client->request('GET', "/movies/popular");
    }

    public function upcoming(): array
    {
        return $this->client->request('GET', "/movies/upcoming");
    }
}