<?php

include("connection.php");

$sql = "CREATE TABLE users (
id int PRIMARY KEY,
username varchar(50) NOT NULL,
password varchar(50) NOT NULL
)";

if ($conn->query($sql) === true) {
    echo " Table create success";
} else {
    echo " Failed" . $conn->error;
}
