<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        USERNAME:
        <input type="text" name="username"><br><br>
        <button>search</button>
    </form>
</body>

</html>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("connection.php");


    $sql = "SELECT * FROM users WHERE username = '$_POST[username]'";

    // $sql = "SELECT * FROM users WHERE username LIKE '%$_POST[username]%'";

    $result = mysqli_query($conn, $sql);

    $resultCount = mysqli_num_rows($result);

    if ($resultCount > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " Name: " . $row["username"] . " Password: " . $row["password"] . "<br>";
        }
    }
}

?>