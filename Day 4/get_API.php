<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age);
}
?>
