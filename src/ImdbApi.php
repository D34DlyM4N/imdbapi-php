<?php

namespace ImdbApi;

use ImdbApi\Api\MoviesApi;
use ImdbApi\Api\TvShowsApi;
use ImdbApi\Api\CelebritiesApi;
use ImdbApi\Http\ApiClient;

class ImdbApi
{
    private $client;

    public function __construct($baseUrl = 'https://imdbapi.dev')
    {
        $this->client = new ApiClient($baseUrl);
    }

    public function movies()
    {
        return new MoviesApi($this->client);
    }

    public function tvShows()
    {
        return new TvShowsApi($this->client);
    }

    public function celebrities()
    {
        return new CelebritiesApi($this->client);
    }
}