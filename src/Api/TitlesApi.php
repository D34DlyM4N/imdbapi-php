<?php

namespace ImdbApi\Api;

use ImdbApi\Client;

class TitlesApi
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get title by IMDb ID
     */
    public function get($id)
    {
        return $this->client->get("/titles/{$id}");
    }

    /**
     * Search titles
     */
    public function search($query)
    {
        return $this->client->get("/titles", [
            'q' => $query
        ]);
    }
}