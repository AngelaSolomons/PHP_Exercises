<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Simple Budget Calculator
echo "<br>";
echo "<br>";


$totalBudget = 5000;
$groceries = 1500;
$transport = 400;
$entertainment = 500;

$totalExpenses = $groceries + $transport + $entertainment;
$balance = $totalBudget - $totalExpenses;

echo "My budget for the month is " . $totalBudget . ". After paying for all of my expenses, the remaining balance is " . $balance . ".";
echo "<br>";
echo "<br>";

// Age Category Check
$age = 37;

if ($age < 12) {
    echo "Your category is Child.";
}
elseif ($age >= 13 && $age<= 17) {
    echo "Your category is Teen.";
}
elseif ($age >= 18 && $age<= 64) {
    echo "Your category is Adult.";
}
else {
    echo "Your category is Senior.";
}
echo "<br>";
echo "<br>";


// Simple Interest Calculator
$principalAmount = 10000;
$rate = 5;
$time = 3;

$interest = $principalAmount * $rate * $time;



// Logical Operator Practice


// Dynamic Discount

?>

</body>
</html>