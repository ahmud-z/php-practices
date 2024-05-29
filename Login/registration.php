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
            <input type="number" name="id"><br><br>
            Username:
            <input type="text" name="username"><br><br>
            Password:
            <input type="text" name="password"><br><br>
            <button>submit</button>
        </form>

    </div>

</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("connection.php");


    $sql = "INSERT INTO users (id, username, password) VALUES
    
    ('$_POST[id]', '$_POST[username]','$_POST[password]')";

    if ($conn->query($sql) === true) {
        echo "Success";
    } else {
        echo "Failed";
    }
}

?>