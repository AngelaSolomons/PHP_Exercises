<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 4</title>
</head>
<body>

<?php

// ==========================================
// Task 1 - For Loop
// Display numbers from 0 to 10
// ==========================================
for ($i = 0; $i <= 10; $i++) {

    echo "i is equal to $i <br>";

}

echo "<hr>";


// ==========================================
// Task 2 - Array with a For Loop
// ==========================================
// Create an array of cars
$cars = [
    "Jaguar F-Type",
    "Supra",
    "Porsche 911"
];

// Loop through the array using the index number
for ($i = 0; $i < count($cars); $i++) {

    echo $cars[$i] . "<br>";

}

echo "<hr>";


// ==========================================
// Task 3 - Foreach Loop
// ==========================================
// Foreach automatically goes through every item
foreach ($cars as $car) {

    echo $car . "<br>";

}

echo "<hr>";


// ==========================================
// Task 4 - While Loop
// ==========================================
$x = 0;

// Continue while x is less than or equal to 5
while ($x <= 5) {

    echo "X is equal to: $x <br>";

    $x++;

}

echo "<hr>";


// ==========================================
// Task 5 - Do While Loop
// ==========================================
$y = 6;

// The code runs once before checking the condition
do {

    echo "Y is equal to: $y <br>";

    $y++;

} while ($y <= 5);

echo "<p><strong>Observation:</strong> The do...while loop always executes at least once because the condition is checked after the code runs.</p>";

echo "<hr>";


// ==========================================
// Task 6 - Function
// ==========================================
// Function that displays a name
function printMyName($name)
{
    echo $name;
}

// Call the function
printMyName("Jack");

echo "<hr>";


// ==========================================
// Task 7 - Multiply Function
// ==========================================
// Function that multiplies two numbers
function multiply($number1, $number2)
{
    return $number1 * $number2;
}

// Store the answer in a variable
$answer = multiply(5, 2);

echo "5 × 2 = $answer";

echo "<hr>";


// ==========================================
// Task 8 - Array Function
// ==========================================
// Function that loops through an array
function arrayLooper($array)
{
    foreach ($array as $item) {

        echo $item . "<br>";

    }
}

// Create a fruit array
$fruits = [
    "Apple",
    "Orange",
    "Mango",
    "Banana"
];

// Send the array into the function
arrayLooper($fruits);

?>

</body>
</html>