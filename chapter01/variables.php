<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $name = "Ahmudul Hossain";
    $age = 23;
    $gpa = 4.64;
    $isAlive = true;

    echo "Hello $name" . "<br>";
    echo "You're $age" . "<br>";
    echo "You're GPA is $gpa" . "<br>";
    if ($isAlive) {
        echo "You're alive" . "<br>";
    } else {
        echo "You're not alive" . "<br>";
    }
    ?>
</body>

</html>