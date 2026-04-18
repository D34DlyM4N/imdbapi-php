<?php

namespace ImdbApi\Model;

class Movie
{
    public function __construct(
        public string $id,
        public string $title,
        public ?float $rating = null,
        public ?string $year = null,
        public ?string $image = null
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            $data['id'] ?? '',
            $data['title'] ?? '',
            $data['rating'] ?? null,
            $data['year'] ?? null,
            $data['image'] ?? null
        );
    }
}