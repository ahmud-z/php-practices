<?php
require_once("connection.php");

$result = mysqli_query($conn, "SELECT * FROM img_table");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
    <div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="uploadImage" accept="image/*">
            <input type="submit" name="submitBtn">

        </form>
    </div>
    <div>
        <h1>Uploaded Image Gallery</h1>
        <?php while ($row  = mysqli_fetch_assoc($result)) : ?>
            <div>
                <img src="./uploads/<?= $row["file_name"] ?>" alt="" width="10%">
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>