<!DOCTYPE html>
<html>
<head>
    <title>Sum of Squares and Cubes</title>
    <style>
        p{
            color: grey;
        }
    </style>
</head>
<body>
<?php

$N = 10; 

$squareSum = 0;
$cubeSum = 0;
$i = 1;

// while loop ni siya sir
while ($i <= $N) {
    $squareSum += $i * $i;     
    $cubeSum += $i * $i * $i;
    $i++;
}

echo "<p>while loop</p>";
echo "Enter the upper Limit: $N.<br>\n";
echo "The sum of squares from 1 to $N is $squareSum.<br>\n";
echo "The sum of cubes from 1 to $N is $cubeSum.<br>\n<br>";
?>



<?php
$N = 15; 

$squareSum = 0;
$cubeSum = 0;
$i = 1;
// do while loop ni sir
do {
    $squareSum += $i * $i;
    $cubeSum += $i * $i * $i;
    $i++;
} while ($i <= $N);

echo "<p>do while loop</p>";
echo "Enter the upper Limit: $N.<br>\n";
echo "The sum of squares from 1 to $N is $squareSum.<br>\n";
echo "The sum of cubes from 1 to $N is $cubeSum.<br>\n";
?>
</body>
</html>