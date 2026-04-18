<?php

namespace ImdbApi;

use GuzzleHttp\Client;

class Client
{
    private $http;
    private $baseUrl;

    public function __construct($baseUrl = 'https://api.imdbapi.dev')
    {
        $this->baseUrl = rtrim($baseUrl, '/');

        $this->http = new Client([
            'base_uri' => $this->baseUrl,
            'timeout'  => 10
        ]);
    }

    public function get($uri, $query = [])
    {
        $response = $this->http->request('GET', $uri, [
            'query' => $query,
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}