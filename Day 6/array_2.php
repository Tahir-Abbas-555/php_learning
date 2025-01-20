<?php
// Indexed Array
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo "Color: $color<br>";
}

// Associative Array
$person = ["name" => "Tahir", "city" => "Sukkur"];
echo "Name: " . $person["name"] . "<br>";

// Multidimensional Array
$students = [
    ["name" => "Tahir", "marks" => 85],
    ["name" => "Abbas", "marks" => 90]
];
foreach ($students as $student) {
    echo $student["name"] . " scored " . $student["marks"] . " marks.<br>";
}
?>
