<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $books = [
        [
            "name" => "Earth 101",
            "author" => "John Doe",
            "releaseYear" => 2021
        ],
        [
            "name" => "Saturn 105",
            "author" => "John Doe",
            "releaseYear" => 2008
        ],
        [
            "name" => "Uranus 301",
            "author" => "Lorem Dolor",
            "releaseYear" => 1982
        ],
        [
            "name" => "Venus 582MG",
            "author" => "Andy Weir",
            "releaseYear" => 1415
        ]
    ];


    function filterByAuthor($books, $authorName)
    {
        $filteredBooks = [];

        foreach ($books as $book) {

            if ($book["author"] === $authorName) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }

    ?>

    <ul>
        <?php foreach (filterByAuthor($books, "John Doe") as $book) : ?>

            <li>
                <?= $book["name"] ?>
            </li>

        <?php endforeach; ?>
    </ul>


</body>

</html>