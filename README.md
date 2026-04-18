# IMDbAPI PHP SDK

## Install
composer require khalid/imdbapi-php

## Usage
```php
$api = new ImdbApi\ImdbApi();

$movies = $api->movies()->search('Batman');