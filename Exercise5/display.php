<!DOCTYPE html>
<html>

<head>

<title>Users</title>

</head>


<body>


<h1>All Users</h1>


<?php


include "db_connection.php";



$result = $connection->query(

    "SELECT * FROM users"

);



echo "

<table border='1'>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Actions</th>

</tr>

";



while ($row = $result->fetch_assoc()) {


echo "

<tr>

<td>".$row["id"]."</td>

<td>".$row["name"]."</td>

<td>".$row["email"]."</td>

<td>".$row["message"]."</td>


<td>

<a href='update.php?id=".$row["id"]."'>
Edit
</a>


|

<a href='delete.php?id=".$row["id"]."'>
Delete
</a>


</td>


</tr>


";


}



echo "</table>";



?>


<br>

<a href="index.php">
Add New User
</a>


</body>

</html>