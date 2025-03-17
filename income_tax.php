<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
function calculateNetIncome($hourlyRate) {
    $workingDays = 26;
    $hoursPerDay = 8;
    $grossIncome = $hourlyRate * $hoursPerDay * $workingDays;
    $tax = 0;

    if ($grossIncome <= 15000) {
        $tax = 0;
    } elseif ($grossIncome <= 30000) {
        $tax = ($grossIncome - 15000) * 0.05;
    } else {
        $tax = (15000 * 0.05) + (($grossIncome - 30000) * 0.10);
    }

    $netIncome = $grossIncome - $tax;

    echo "Gross Income: $" . number_format($grossIncome, 2) . "<br>";
    echo "Tax Deducted: $" . number_format($tax, 2) . "<br>";
    echo "Net Income: $" . number_format($netIncome, 2) . "<br>";
}
$hourlyRate = 83;
calculateNetIncome($hourlyRate);
    echo "Hourly Rate: $" . number_format ($hourlyRate);
?>
</body>
</html>