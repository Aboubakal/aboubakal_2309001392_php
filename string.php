<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Manipulation</title>
</head>
<body>
    <h1>PHP String Manipulation</h1>
    <?php
    // Define some strings
    $firstName = "Ramadhan";
    $lastName = "Aboubakar";

    // Concatenate strings
    $fullName = $firstName . " " . $lastName;
    echo "<p><strong>Full Name:</strong> " . $fullName . "</p>";

    // String length
    echo "<p><strong>Length of Full Name:</strong> " . strlen($fullName) . "</p>";

    // Convert to uppercase
    echo "<p><strong>Uppercase:</strong> " . strtoupper($fullName) . "</p>";

    // Convert to lowercase
    echo "<p><strong>Lowercase:</strong> " . strtolower($fullName) . "</p>";

    // Find a substring
    echo "<p><strong>Position of 'Abou':</strong> " . strpos($fullName, "Abou") . "</p>";

    // Replace a substring
    $replacedName = str_replace("Aboubakar", "Bakari", $fullName);
    echo "<p><strong>Replaced Name:</strong> " . $replacedName . "</p>";
    ?>
</body>
</html>