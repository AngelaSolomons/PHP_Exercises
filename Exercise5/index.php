<!DOCTYPE html>
<html>
<head>
    <title>Exercise 5</title>
</head>
<body>

<h1>User Information Form</h1>

<form method="POST">

    <label>Name:</label><br>
    <input type="text" name="name" required>

    <br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required>

    <br><br>

    <label>Message:</label><br>
    <textarea name="message" required></textarea>

    <br><br>

    <button type="submit">Submit</button>

</form>

<?php

include "exercise5_database.php";


echo "<h3>Server Information</h3>";

echo "Host Name: " . $_SERVER["SERVER_NAME"] . "<br>";

echo "PHP Version: " . phpversion() . "<br>";

echo "Request Method: " . $_SERVER["REQUEST_METHOD"] . "<br><br>";

// Task 1 & Task 5 - Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $message = $_REQUEST["message"];

    // Display submitted data
    echo "<h3>Submitted Information</h3>";

    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br><br>";

    // Insert into database
    $sql = "INSERT INTO users(name, email, message)
            VALUES('$name', '$email', '$message')";

    if ($connection->query($sql)) {

        echo "User added successfully!";

    } else {

        echo "Error: " . $connection->error;

    }

}

?>

<br><br>

<a href="display.php">View Users</a>

</body>
</html>