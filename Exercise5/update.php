<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <?php


include "db_connection.php";


$id = $_GET["id"];



$sql = "

UPDATE users

SET email='updated@email.com'

WHERE id=$id

";



if ($connection->query($sql)) {


    echo "User updated";


}

else {


    echo "Error: " . $connection->error;


}


?>


<br>

<a href="display.php">
Back
</a>
</body>
</html>