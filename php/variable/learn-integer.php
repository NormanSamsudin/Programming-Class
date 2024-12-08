<?php
// 1. Declare Integers
$a = 15;
$b = 4;

echo "1. Integers Declared: a = $a, b = $b<br>";

// 2. Basic Arithmetic Operations
echo "2. Addition (a + b): " . ($a + $b) . "<br>";
echo "3. Subtraction (a - b): " . ($a - $b) . "<br>";
echo "4. Multiplication (a * b): " . ($a * $b) . "<br>";
echo "5. Division (a / b): " . ($a / $b) . "<br>";
echo "6. Modulus (a % b): " . ($a % $b) . "<br>";

echo "<hr>";  // Separator for better readability

// 7. Increment and Decrement
$a++;
echo "7. Increment a: $a<br>";

$b--;
echo "8. Decrement b: $b<br>";

// 9. Exponentiation
$result = pow($a, $b);
echo "9. Exponentiation (a^b): $result<br>";

// 10. Absolute Value
$negative = -25;
echo "10. Absolute Value of -25: " . abs($negative) . "<br>";

// 11. Random Numbers
echo "11. Random Number (1-100): " . rand(1, 100) . "<br>";

// 12. Max and Min
$num1 = 45;
$num2 = 78;
echo "12. Max of $num1 and $num2: " . max($num1, $num2) . "<br>";
echo "13. Min of $num1 and $num2: " . min($num1, $num2) . "<br>";

echo "<hr>";  // Separator

// 14. Type Checking
echo "14. Is $a an integer? " . (is_int($a) ? "Yes" : "No") . "<br>";
echo "15. Is 12.5 an integer? " . (is_int(12.5) ? "Yes" : "No") . "<br>";

// 16. Type Casting from String to Integer
$stringNumber = "123";
$castedInt = (int)$stringNumber;
echo "16. Casting String '123' to Integer: $castedInt<br>";

// 17. Integer Overflow (for 32-bit systems)
$largeInt = PHP_INT_MAX;
echo "17. Max Integer Value (PHP_INT_MAX): $largeInt<br>";
echo "18. After Adding 1 (Overflow Test): " . ($largeInt + 1) . "<br>";
?>
