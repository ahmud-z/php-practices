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
        PASSWORD":
        <input type="text" name="password"><br><br>

        <button>Submit</button>
    </form>
</body>

</html>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("connection.php");


    $sql = "SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'";

    $result = mysqli_query($conn, $sql);

    $resultCount = mysqli_num_rows($result);


    if ($resultCount == 1) {
        header("Location: https://ahmudz-portfolio.vercel.app");
    } else {
        echo "Invalid username and password";
    }
}




?>