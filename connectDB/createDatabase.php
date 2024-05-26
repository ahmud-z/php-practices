<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

$sql = "CREATE DATABASE demoDB";

if ($conn->query($sql) === true) {
    echo "Connected";
} else {
    echo "Failed" . $conn->error;
}

?>
