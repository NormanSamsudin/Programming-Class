<?php
// 1. Declare Booleans
$trueValue = true;
$falseValue = false;

echo "1. Booleans Declared: trueValue = $trueValue, falseValue = $falseValue<br>";

// 2. Boolean Operations
echo "2. AND Operation (true AND false): " . ($trueValue && $falseValue ? "true" : "false") . "<br>";
echo "3. OR Operation (true OR false): " . ($trueValue || $falseValue ? "true" : "false") . "<br>";
echo "4. NOT Operation (NOT true): " . (!$trueValue ? "true" : "false") . "<br>";

echo "<hr>";  // Separator for better readability

// 5. Boolean from Integer
$integerTrue = 1;
$integerFalse = 0;

echo "5. Integer 1 as Boolean: " . (bool)$integerTrue . "<br>";
echo "6. Integer 0 as Boolean: " . (bool)$integerFalse . "<br>";

// 7. Boolean from String
$nonEmptyString = "Hello, World!";
$emptyString = "";

echo "7. Non-empty string as Boolean: " . (bool)$nonEmptyString . "<br>";
echo "8. Empty string as Boolean: " . (bool)$emptyString . "<br>";

echo "<hr>";  // Separator for better readability

// 9. Boolean Evaluation with Comparison Operators
$x = 10;
$y = 5;

echo "9. Is x > y? " . ($x > $y ? "true" : "false") . "<br>";
echo "10. Is x == y? " . ($x == $y ? "true" : "false") . "<br>";
echo "11. Is x <= y? " . ($x <= $y ? "true" : "false") . "<br>";

echo "<hr>";  // Separator for better readability

// 12. Boolean Comparison (Strict Comparison)
$strictTrue = true;
$strictFalse = false;
$strictZero = 0;
$strictString = "0";

echo "12. Is true equal to 1 (strict)? " . ($strictTrue === 1 ? "true" : "false") . "<br>";
echo "13. Is false equal to 0 (strict)? " . ($strictFalse === 0 ? "true" : "false") . "<br>";
echo "14. Is 0 equal to '0' (strict)? " . ($strictZero === $strictString ? "true" : "false") . "<br>";

echo "<hr>";  // Separator for better readability

// 15. Boolean Conversion from Other Types
$floatNumber = 3.14;
echo "15. Float 3.14 as Boolean: " . (bool)$floatNumber . "<br>";

$emptyArray = [];
echo "16. Empty array as Boolean: " . (bool)$emptyArray . "<br>";

$nonEmptyArray = [1, 2, 3];
echo "17. Non-empty array as Boolean: " . (bool)$nonEmptyArray . "<br>";

?>
