<?php
// 1. Declare a Simple Function
function greet($name) {
    return "Hello, " . $name . "!";
}

echo "1. Simple Function Output: " . greet("Norman") . "<br>";

echo "<hr>";  // Separator for better readability

// 2. Function with Default Argument Value
function greetDefault($name = "Guest") {
    return "Hello, " . $name . "!";
}

echo "2. Function with Default Argument (no argument passed): " . greetDefault() . "<br>";
echo "3. Function with Default Argument (with argument passed): " . greetDefault("Alice") . "<br>";

echo "<hr>";  // Separator for better readability

// 3. Function that Returns Multiple Values (using an array)
function getUserInfo() {
    return ["name" => "Norman", "age" => 25];
}

$userInfo = getUserInfo();
echo "4. Function that Returns Multiple Values: Name = " . $userInfo['name'] . ", Age = " . $userInfo['age'] . "<br>";

echo "<hr>";  // Separator for better readability

// 4. Function with Variable Number of Arguments (using func_num_args and func_get_args)
function sum() {
    $args = func_get_args();
    $total = 0;
    foreach ($args as $arg) {
        $total += $arg;
    }
    return $total;
}

echo "5. Function with Variable Number of Arguments (sum of 1, 2, 3): " . sum(1, 2, 3) . "<br>";
echo "6. Function with Variable Number of Arguments (sum of 5, 10, 15, 20): " . sum(5, 10, 15, 20) . "<br>";

echo "<hr>";  // Separator for better readability

// 5. Function with Return Type Declaration
function multiply(int $a, int $b): int {
    return $a * $b;
}

echo "7. Function with Return Type Declaration (multiply 5 and 4): " . multiply(5, 4) . "<br>";

echo "<hr>";  // Separator for better readability

// 6. Anonymous Function (Lambda Function)
$sumFunction = function($a, $b) {
    return $a + $b;
};

echo "8. Anonymous Function Output (sum 7 and 8): " . $sumFunction(7, 8) . "<br>";

echo "<hr>";  // Separator for better readability

// 7. Recursive Function
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo "9. Recursive Function Output (factorial of 5): " . factorial(5) . "<br>";

echo "<hr>";  // Separator for better readability

// 8. Function with Reference Parameters
function addFive(&$number) {
    $number += 5;
}

$num = 10;
addFive($num);
echo "10. Function with Reference Parameter (adding 5 to 10): $num<br>";

echo "<hr>";  // Separator for better readability

// 9. Function with Return Value Used in Another Function
function getSquare($x) {
    return $x * $x;
}

echo "11. Function with Return Value Used in Another Function (square of 6): " . getSquare(getSquare(6)) . "<br>";

?>
