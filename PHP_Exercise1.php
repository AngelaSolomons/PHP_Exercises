<!DOCTYPE html>
<html>
<body>


<?php
// Embed PHP into an HTML file to create a "Welcome" page. 
echo "<h1>Welcome to PHP Programming!</h1>";
echo "<br>";

//  print your name, your favourite programming language, and why you like it
echo "My name is Angela. ";
echo "My favourite programming language is PHP because it is easy to use.";
echo "<br>";
echo "<br>";

//  Write a script that calculates and prints the sum of two numbers
$x = 12;
$y = 2;

echo "The sum of 12 and 2 is ";
echo  $x + $y;
echo "<br>";
echo "<br>";

// Create a PHP script to display today's date using the `date()` function
echo "Today is " . date("d/m/Y");
echo "<br>";
echo "<br>";

//  Write a script that uses PHP to generate a random number between 1 and 100
$number = rand(1, 100);

echo "Your lucky number today is $number";
?>

</body>
</html>