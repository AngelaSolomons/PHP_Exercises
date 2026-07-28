<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercise 2</title>
</head>
<body>
    
<?php

// Create variables for your name, age, favorite color, and favorite hobby. Display them as a formatted paragraph
echo "<h4>Personal Bio with Variables</h4>";
$name = "Angela";
$age = 77;
$favColor = "yellow";
$favHobby = "reading";

echo "Hi, I'm " . $name . ". I'm " . $age . " years old, my favorite color is " . $favColor . ", and I love " . $favHobby . ".";
echo "<br>";
echo "<br>";


// Write a script to calculate BMI given height (in meters) and weight (in kilograms). Print the result
echo "<h4>BMI Calculator</h4>";
$height = 1.75;
$weight = 85;
$bmi = $weight / ($height * 2);

if ($bmi < 18.5) {
    echo "Your BMI is: " . (round($bmi)) . " (Underweight).";
}
elseif ($bmi < 25) {
    echo "Your BMI is: " . (round($bmi)) . " (Normal weight).";
}
elseif ($bmi < 30) {
    echo "Your BMI is: " . (round($bmi)) . " (Overweight).";
}
else {
    echo "Your BMI is: " . (round($bmi)) . " (Obese).";
}
echo "<br>";
echo "<br>";


// Declare a global variable $globalVar. Use a function to demonstrate how global variables behave differently from local ones by modifying the global value
echo "<h4>Global vs Local Variables</h4>";
$globalVar = 2;

function changeGlobalVariable() {
    global $globalVar;
    echo "The global variable is " . $globalVar . ".";
    echo "<br>";

    // change globalVar value
    $globalVar = 5;
    $localVar = 10;
    echo "The global variable is now " . $globalVar . ".";
    echo "<br>";

    echo "The local variable is " . $localVar . ".";
    echo "<br>";
}
changeGlobalVariable();
// echo $localVar;            localVar will give an error because it only exists inside changeGlobalVariable


// Assign a float value to a variable and convert it to an integer using intval(). Print both the original and converted value
echo "<h4>Type Conversion Experiment</h4>";
$convertToInt = 12.2;
echo "The value is " . $convertToInt . ".";
echo "<br>";

$convertToInt = (int)$convertToInt;
echo "The value is now " . $convertToInt . ".";
echo "<br>";
echo "<br>";


// Use the gettype() function to identify and print the types of various variables (integer, float, string, and array)
echo "<h4>Data Type Identification</h4>";
$a = 200;
echo "This is a " . gettype($a) . "<br>";

$b = 23.3;
echo "This is a " . gettype($b) . "<br>";

$c = "Rainbow";
echo "This is a " . gettype($c) . "<br>";

$d = true;
echo "This is a " . gettype($d) . "<br>";

$e = array("Red", "Orange", "Yellow", "Green", "Blue", "Indigo", "Violet");
echo "This is a " . gettype($e) . "<br>";


?>
</body>
</html>