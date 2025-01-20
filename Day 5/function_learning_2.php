<?php
// Function to calculate factorial
function factorial($num) {
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

echo "Factorial of 5: " . factorial(5) . "<br>"; // Outputs: 120

// Function to check if a number is even
function isEven($num) {
    return $num % 2 == 0 ? "Even" : "Odd";
}

echo "6 is " . isEven(6); // Outputs: Even
?>