<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="" method="POST">
            ID:
            <input type="number" name="id" placeholder="Enter user your id"><br><br>
            Name:
            <input type="text" name="name" placeholder="Enter your name"><br><br>
            New Password:
            <input type="password" name="password" placeholder="Enter your new password"><br><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>

<?php

include("connection.php");

$sql = "UPDATE users SET password = '$_POST[password]' WHERE id = '$_POST[id]' AND username = '$_POST[name]'";

if ($conn->query($sql) === true) {
    echo "successfully updated";
} else {
    echo "failed to update";
}

?>