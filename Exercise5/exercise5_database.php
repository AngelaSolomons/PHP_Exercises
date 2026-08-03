<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercise 5</title>
</head>
<body>
    
<?php

$connection = new mysqli(
    "localhost",                   //Server name
    "root",                        //MySQL username
    "",                            //MySQL password
    "exercise5_database"           //Database name
);

// Check if connection works
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>


</body>
</html>