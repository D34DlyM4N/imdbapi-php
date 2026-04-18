<?php

namespace ImdbApi;

use ImdbApi\Api\MoviesApi;
use ImdbApi\Api\TvShowsApi;
use ImdbApi\Api\CelebritiesApi;
use ImdbApi\Http\ApiClient;

class ImdbApi
{
    private ApiClient $client;

    public function __construct(string $baseUrl = 'https://imdbapi.dev')
    {
        $this->client = new ApiClient($baseUrl);
    }

    public function movies(): MoviesApi
    {
        return new MoviesApi($this->client);
    }

    public function tvShows(): TvShowsApi
    {
        return new TvShowsApi($this->client);
    }

    public function celebrities(): CelebritiesApi
    {
        return new CelebritiesApi($this->client);
    }
}