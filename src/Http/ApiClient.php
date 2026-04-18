<?php

namespace ImdbApi\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use ImdbApi\Exception\ApiException;

class ApiClient
{
    private Client $client;

    public function __construct(
        string $baseUrl = 'https://imdbapi.dev',
        int $timeout = 10
    ) {
        $this->client = new Client([
            'base_uri' => rtrim($baseUrl, '/'),
            'timeout'  => $timeout,
        ]);
    }

    public function request(string $method, string $uri, array $query = []): array
    {
        try {
            $response = $this->client->request($method, $uri, [
                'query' => $query,
                'headers' => ['Accept' => 'application/json']
            ]);

            return json_decode($response->getBody()->getContents(), true);

        } catch (GuzzleException $e) {
            throw new ApiException($e->getMessage(), $e->getCode());
        }
    }
}