<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            font-family: system-ui;
        }
    </style>
</head>

<body>

    <?php

    $name = "Dark Matter";
    $read = false;

    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have NOT read $name";
    }

    ?>

    <?= $message ?>

    <h1>
        Recommended Books
    </h1>

    <?php
    $books = [
        "Do Androids Dream of Elecric Sheep",
        "The Langoliers",
        "Hail Mary"
    ];
    ?>

    <ul>
        <?php
        /* foreach ($books as $book) {
            echo "<li>{$book}™</li>";
        } */

        foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

    <?php
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
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>