<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']); // Remove unnecessary spaces
    $name = filter_var($name, FILTER_SANITIZE_STRING); // Remove special characters

    $age = $_POST['age'];
    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        echo "Invalid age.";
    } else {
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Age: " . htmlspecialchars($age);
    }
}
?>
