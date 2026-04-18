<?php

namespace ImdbApi\Model;

class Movie
{
    public $id;
    public $title;
    public $rating;
    public $year;
    public $image;

    public static function fromArray(array $data)
    {
        $obj = new self();
        $obj->id = isset($data['id']) ? $data['id'] : '';
        $obj->title = isset($data['title']) ? $data['title'] : '';
        $obj->rating = isset($data['rating']) ? $data['rating'] : null;
        $obj->year = isset($data['year']) ? $data['year'] : null;
        $obj->image = isset($data['image']) ? $data['image'] : null;

        return $obj;
    }
}