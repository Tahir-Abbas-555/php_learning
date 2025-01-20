<?php
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 10); // Store the result
echo "Sum: $result";  // Outputs: Sum: 15

function increment(&$value) {
    $value++;
}

$num = 5;
increment($num);
echo $num; // Outputs: 6

echo strlen("Hello"); // Outputs: 5
echo strrev("Hello"); // Outputs: olleH
echo max(10, 20, 30); // Outputs: 30
echo rand(1, 100);    // Outputs a random number between 1 and 100

?>
