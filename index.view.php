<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        html {
            color-scheme: dark;
        }

        body {
            font-family: system-ui;
        }
    </style>
</head>

<body>
    <?= $message ?>

    <h1>
        Recommended Books
    </h1>

    <ul>
        <?php
        foreach ($items as $item) : ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($filteredItems as $book) : ?>
            <?php // if ($book['author'] === 'Andy Weir') : 
            ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
            <?php // endif; 
            ?>
        <?php endforeach; ?>
    </ul>

</body>

</html>