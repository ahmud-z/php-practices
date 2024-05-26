<?php
include("connection.php");

$sql = "CREATE TABLE student(

ID int(20) PRIMARY KEY NOT NULL,
Name varchar(30) NOT NULL,
Username varchar(30) NOT NULL,
Password varchar(30) NOT NULL
)";

$conn->query($sql);

?>