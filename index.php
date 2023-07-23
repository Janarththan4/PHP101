<?php

$name = "Dark Matter";
$read = false;

if ($read) {
    $message = "You have read $name";
} else {
    $message = "You have NOT read $name";
}

$items = [
    "Do Androids Dream of Elecric Sheep",
    "The Langoliers",
    "Hail Mary"
];

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip L. Dick',
        'releaseYear' => 1948,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ],
];

/* function filter($items, $function)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($function($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}; */

$filteredItems = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 2000;
});

require 'index.view.php';
