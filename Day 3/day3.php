<?php
// if condition
$marks = 75;

if ($marks >= 80) {
    echo "Grade: A<br>";
} elseif ($marks >= 60) {
    echo "Grade: B<br>";
} else {
    echo "Grade: C<br>";
}
//  switch condition
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the week!<br>";
        break;
    case "Friday":
        echo "Weekend is near!<br>";
        break;
    default:
        echo "It's just another day.<br>";
}
//  while loop
$a = 0;
while ($a <= 10) {
    echo "$a <br>";
    $a+=1;
}

//  do-while loop

$b = 20;
do {
    echo "$b <br>";
    $b+=1;
} while ($b <= 30);

//  for loop
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i<br>";
}

// foreach loop

$fruits = array("Apple", "Banana", "Cherry");
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}

// Combining Loops and Conditions

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i is even<br>";
    } else {
        echo "$i is odd<br>";
    }
}
?>
