<?php

echo "<h3>1. For Loop Example (Count from 1 to 5)</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}

echo "<h3>2. While Loop Example (Count from 5 to 1)</h3>";
$count = 5;
while ($count >= 1) {
    echo "Number: $count<br>";
    $count--;
}

echo "<h3>3. Do-While Loop Example (Print Numbers 1 to 3)</h3>";
$number = 1;
do {
    echo "Number: $number<br>";
    $number++;
} while ($number <= 3);

echo "<h3>4. Foreach Loop Example (Print an Array of Fruits)</h3>";
$fruits = ["Apple", "Banana", "Cherry", "Mango"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}

echo "<h3>5. Nested Loops Example (Multiplication Table)</h3>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}

echo "<h3>6. Break and Continue Example (Skip Number 3)</h3>";
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        echo "Skipping number 3<br>";
        continue;
    }
    echo "Number: $i<br>";
}

?>
