<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>

<body>


<h1>User Information Form</h1>


<form method="POST">


    <label>Name:</label>
    <input type="text" name="name">

    <br><br>


    <label>Email:</label>
    <input type="email" name="email">

    <br><br>


    <label>Message:</label>
    <textarea name="message"></textarea>

    <br><br>


    <button type="submit">
        Submit
    </button>


</form>



<?php


include "db_connection.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = $_REQUEST["name"];

    $email = $_REQUEST["email"];

    $message = $_REQUEST["message"];



    $sql = "

    INSERT INTO users(name,email,message)

    VALUES(
        '$name',
        '$email',
        '$message'
    )

    ";



    if ($connection->query($sql)) {


        echo "User added successfully";


    } else {


        echo "Error: " . $connection->error;


    }


}



?>


<br><br>

<a href="display.php">
View Users
</a>


</body>
</html>