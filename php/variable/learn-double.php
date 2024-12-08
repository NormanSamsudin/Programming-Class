<?php
// 1. Declare Doubles (Floating Point Numbers)
$pi = 3.14159;
$radius = 5.5;

echo "1. Doubles Declared: pi = $pi, radius = $radius<br>";

// 2. Basic Arithmetic Operations
echo "2. Addition (pi + radius): " . ($pi + $radius) . "<br>";
echo "3. Subtraction (pi - radius): " . ($pi - $radius) . "<br>";
echo "4. Multiplication (pi * radius): " . ($pi * $radius) . "<br>";
echo "5. Division (pi / radius): " . ($pi / $radius) . "<br>";

echo "<hr>";  // Separator for better readability

// 6. Exponentiation
$result = pow($radius, 2);  // Squaring the radius
echo "6. Exponentiation (radius^2): $result<br>";

// 7. Round a Number
$number = 9.87654321;
echo "7. Rounded Number (to 2 decimal places): " . round($number, 2) . "<br>";

// 8. Floor and Ceiling
echo "8. Floor of 9.87654321: " . floor($number) . "<br>";
echo "9. Ceiling of 9.87654321: " . ceil($number) . "<br>";

// 10. Absolute Value
$negativeValue = -15.75;
echo "10. Absolute Value of -15.75: " . abs($negativeValue) . "<br>";

// 11. Random Floating-Point Numbers
echo "11. Random Floating-Point Number (0-1): " . mt_rand() / mt_getrandmax() . "<br>";

// 12. Max and Min
$num1 = 45.55;
$num2 = 78.99;
echo "12. Max of $num1 and $num2: " . max($num1, $num2) . "<br>";
echo "13. Min of $num1 and $num2: " . min($num1, $num2) . "<br>";

echo "<hr>";  // Separator

// 14. Type Checking
echo "14. Is $pi a double? " . (is_float($pi) ? "Yes" : "No") . "<br>";
echo "15. Is 12 an a double? " . (is_float(12) ? "Yes" : "No") . "<br>";

// 16. Type Casting from String to Double
$stringNumber = "123.45";
$castedDouble = (float)$stringNumber;
echo "16. Casting String '123.45' to Double: $castedDouble<br>";

// 17. Double Precision (For comparison)
$double1 = 0.1;
$double2 = 0.2;
$sum = $double1 + $double2;
echo "17. Double Precision Issue (0.1 + 0.2): $sum<br>";
?>
