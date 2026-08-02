<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercise 4</title>
</head>
<body>
    
<?php
// Write a PHP for loop that displays numbers from 0 to 10, with each number displayed on a new line following the format 'i is equal to X' where X is the current number.
for ($i = 0; $i <= 10; $i++) {
    echo "i is equal to " . $i . "<br>";
}

echo "<br>";


// Create an array containing three car names: 'Jaguar F-Type', 'Supra', and 'Porsche 911'. Write a for loop that displays each car name on a new line.
$cars = ["Jaguar F-Type", "Supra", "Porsche 911"];

for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . "<br>";
}

echo "<br>";


// Using the same cars array from the previous question, write a foreach loop that displays each car name on a new line. Your code should be able to handle any number of cars in the array.
foreach ($cars as $car) {
    echo $car . "<br>";
}

echo "<br>";


// Write a while loop that displays numbers from 0 to 5, with each line showing 'X is equal to: Y' where Y is the current number. Remember to include proper counter initialization and increment.
$x = 0;

while ($x <= 5) {
    echo "X is equal to: " . $x . "<br>";
    $x++;
}

echo "<br>";


// Create a do-while loop that starts with Y = 6 and continues while Y <= 5. For each iteration, display 'Y is equal to: Z' where Z is the current value.
$y = 6;

do {
    echo "Y is equal to: " . $y . "<br>";
    $y++;
} while ($y <= 5);

echo "<p><strong>Observation:</strong> The loop runs once even though the condition is false because a do...while loop checks the condition after executing the code.</p>";

echo "<br>";


// Write a function called printMyName that accepts a name parameter and displays it. Test your function by calling it with the argument 'Jack'.
function printMyName($name)
{
    echo $name;
}

printMyName("Jack");

echo "<br><br>";


// Create a function called multiply that accepts two numbers as parameters, multiplies them together, and returns the result. Test your function by multiplying 5 and 2 and displaying the result.
function multiply($num1, $num2)
{
    return $num1 * $num2;
}

$result = multiply(5, 2);

echo "5 × 2 = " . $result;

echo "<br><br>";


// Write a function called arrayLooper that accepts an array as a parameter and displays each element on a new line. Test your function with an array containing the following fruits: 'Apple', 'Orange', 'Mango', and 'Banana'.
function arrayLooper($array)
{
    foreach ($array as $fruit) {
        echo $fruit . "<br>";
    }
}

$fruits = ["Apple", "Orange", "Mango", "Banana"];

arrayLooper($fruits);

?>


</body>
</html>