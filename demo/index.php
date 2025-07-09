<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
            [
                "name" => "Do Androids Dream of Electric Sheep",
                "author" => "Philip K. Dick",
                "releaseYear" => "1968",
                "purchaseURL" => "http://example.com"
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weir",
                "releaseYear" => "2021",
                "purchaseURL" => "http://example.com"
            ],
            [
                "name" => "The Martian",
                "author" => "Andy Weir",
                "releaseYear" => "2011",
                "purchaseURL" => "http://example.com"
            ]
        ];

        // function filter($items, $fn) {
        //     $filteredItems = [];

        //     foreach ($items as $item) {
        //         if ($fn($item)) {
        //             $filteredItems[] = $item;
        //         }
        //     }

        //     return $filteredItems;
        // }

        $filteredBooks = array_filter($books, function($book) {
            return $book["releaseYear"] >= 2000;
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book["purchaseURL"]; ?>">
                    <?= $book["name"]; ?> (<?= $book["releaseYear"]; ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
