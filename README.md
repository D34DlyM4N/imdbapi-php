# IMDbAPI PHP SDK

## Install
composer require D34DlyM4N/imdbapi-php

## Usage
```php
$api = new ImdbApi\ImdbApi();

$movies = $api->movies()->search('Batman');