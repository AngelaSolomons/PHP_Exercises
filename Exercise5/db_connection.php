<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db_connection</title>
</head>
<body>
    
<?php

$connection = new mysqli(
    "localhost",
    "root",
    "",
    "php_exercise"
);


if ($connection->connect_error) {

    die("Connection failed: " . $connection->connect_error);

}

?>


</body>
</html>