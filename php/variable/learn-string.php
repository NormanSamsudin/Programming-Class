<?php
// Declare strings
$greeting = "Hello, ";
$name = "Norman";

// 1. Concatenate strings
$fullGreeting = $greeting . $name . "!";
echo "1. Concatenated String: $fullGreeting<br>";

// 2. String Length
echo "2. The length of the string is: " . strlen($fullGreeting) . "<br>";

// 3. String Uppercase and Lowercase
echo "3. Uppercase: " . strtoupper($fullGreeting) . "<br>";
echo "4. Lowercase: " . strtolower($fullGreeting) . "<br>";

// 5. Find a Word in a String
$word = "Norman";
if (strpos($fullGreeting, $word) !== false) {
    echo "5. The word '$word' was found in the string!<br>";
} else {
    echo "5. The word '$word' was not found in the string.<br>";
}

// 6. Replace a Word in a String
$replacedString = str_replace("Norman", "World", $fullGreeting);
echo "6. Replaced String: $replacedString<br>";

// 7. Substring Example
echo "7. Substring (first 5 characters): " . substr($fullGreeting, 0, 5) . "<br>";

echo "<hr>";  // Separator for better readability

// String Declaration
$text = "Learning PHP is fun and useful!";

// 8. String Length
echo "8. String Length: " . strlen($text) . "<br>";

// 9. Word Count
echo "9. Word Count: " . str_word_count($text) . "<br>";

// 10. Reverse String
echo "10. Reversed String: " . strrev($text) . "<br>";

// 11. Find Text Position
$searchWord = "PHP";
$position = strpos($text, $searchWord);
if ($position !== false) {
    echo "11. '$searchWord' found at position: $position<br>";
} else {
    echo "11. '$searchWord' not found<br>";
}

// 12. Replace a Word in a String
$replaced = str_replace("fun", "awesome", $text);
echo "12. Replaced String: $replaced<br>";

// 13. String Repeat
echo "13. Repeat Text: " . str_repeat("PHP ", 3) . "<br>";

// 14. Substring Example
echo "14. Substring (7-9): " . substr($text, 7, 3) . "<br>";

// 15. Trim String (Removes Extra Spaces)
$extraSpaces = "   Hello World!   ";
echo "15. Trimmed String: '" . trim($extraSpaces) . "'<br>";

// 16. String Comparison
$firstString = "apple";
$secondString = "Apple";
if (strcasecmp($firstString, $secondString) == 0) {
    echo "16. Strings are equal (case-insensitive)<br>";
} else {
    echo "16. Strings are not equal<br>";
}

// 17. String Hash (MD5 Example)
$hash = md5($text);
echo "17. MD5 Hash of Text: $hash<br>";
?>
