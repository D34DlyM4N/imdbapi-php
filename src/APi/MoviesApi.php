<?php

namespace ImdbApi\Api;

use ImdbApi\Http\ApiClient;

class MoviesApi
{
    /** @var ApiClient */
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function get($id)
    {
        return $this->client->request('GET', "/movies/{$id}");
    }

    public function search($query)
    {
        return $this->client->request('GET', "/movies/search", [
            'query' => $query
        ]);
    }

    public function topRated()
    {
        return $this->client->request('GET', "/movies/top-rated");
    }

    public function popular()
    {
        return $this->client->request('GET', "/movies/popular");
    }

    public function upcoming()
    {
        return $this->client->request('GET', "/movies/upcoming");
    }
}