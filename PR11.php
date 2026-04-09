<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>

<h2>Enter a String</h2>

<form method="post">
    <input type="text" name="inputString" required>
    <button type="submit">Submit</button>
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['inputString'];

    // String length
    $length = strlen($str);

    // Reverse string
    $reversed = strrev($str);

    // Substring
    $substring = substr($str, 2, 4);

    echo "Original String: " . $str . "<br>";
    echo "Length: " . $length . "<br>";
    echo "Reversed String: " . $reversed . "<br>";
    echo "Substring (index 2, length 4): " . $substring;
}
?>

</body>
</html>
