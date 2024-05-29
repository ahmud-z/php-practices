<?php

include("connection.php");

$sql = "CREATE DATABASE testApp";

if ($conn->query($sql) === true) {
    echo "Success";
} else {
    echo "Failed" . $conn->error;
}
