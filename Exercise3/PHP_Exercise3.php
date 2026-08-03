<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercise 3</title>
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
$rate = 0.05;
$time = 3;

$interest = $principalAmount * $rate * $time;
$totalAmount = $principalAmount + $interest;

echo "Interest: R" . $interest;
echo "<br>";
echo "Total Amount: R" . $totalAmount;
echo "<br>";

// Logical Operator Practice
$age = 25;
$registeredToVote = true;

if ($age >= 18 && $age <= 35 && $registeredToVote) {
    echo "Eligible to vote.";
}
else {
    echo "Not eligible to vote.";
}

echo "<br><br>";



// Dynamic Discount
$purchaseAmount = 750;
$discount = 0;

if ($purchaseAmount > 1000) {
    $discount = 0.10;
}
elseif ($purchaseAmount >= 500) {
    $discount = 0.05;
}
elseif ($purchaseAmount >= 250) {
    $discount = 0.02;
}
else {
    $discount = 0;
}

$discountAmount = $purchaseAmount * $discount;
$finalPrice = $purchaseAmount - $discountAmount;

echo "Purchase Amount: R" . $purchaseAmount . "<br>";
echo "Discount Amount: R" . $discountAmount . "<br>";
echo "Final Price: R" . $finalPrice;
?>

</body>
</html>