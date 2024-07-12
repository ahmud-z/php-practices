<?php

require "connection.php";

if (isset($_POST["submitBtn"])) {

    $fileName = $_FILES["uploadImage"]["name"];
    $tempFolder = $_FILES["uploadImage"]["tmp_name"];
    $localFolder = "./uploads/" . $fileName;

    mysqli_query($conn, "INSERT INTO img_table (file_name) values ('$fileName')");

    if (move_uploaded_file($tempFolder, $localFolder)) {
        echo "<h3> Image successfully uploaded </h3>";
    } else {
        echo "<h3> Failed to upload! </h3> ";
    }


    die();
}
