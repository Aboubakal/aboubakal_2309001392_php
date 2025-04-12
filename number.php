<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Max and Min Numbers</title>
</head>
<body>
    <h1>PHP Maximum and Minimum Numbers</h1>
    <?php
    // Define an array of numbers
    $numbers = [45, 78, 12, 89, 34, 23, 67];

    // Find the maximum number
    $maxNumber = max($numbers);

    // Find the minimum number
    $minNumber = min($numbers);

    // Display the results
    echo "<p><strong>Numbers:</strong> " . implode(", ", $numbers) . "</p>";
    echo "<p><strong>Maximum Number:</strong> " . $maxNumber . "</p>";
    echo "<p><strong>Minimum Number:</strong> " . $minNumber . "</p>";
    ?>
</body>
</html>