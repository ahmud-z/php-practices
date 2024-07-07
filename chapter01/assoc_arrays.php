<!DOCTYPE html>
<html lang=en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $books = [
        [
            "name" => "History of Earth",
            "author" => "John Doe",
            "purchaseUrl" => "http://example.com"
        ],

        [
            "name" => "Infinte Universe",
            "author" => "Lorem Ipsum",
            "purchaseUrl" => "http://example.com"

        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>

            <a href=" <?= $book["purchaseUrl"] ?>">
                <li>
                    <?= $book["name"]; ?>
                </li>
            </a>

        <?php endforeach; ?>
    </ul>



</body>

</html>