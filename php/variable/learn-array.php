<?php
// 1. Declare Arrays (Indexed and Associative)
$indexedArray = [10, 20, 30, 40, 50];
$associativeArray = [
    "name" => "Norman",
    "age" => 25,
    "city" => "Cyberjaya"
];

echo "1. Indexed Array: ";
print_r($indexedArray);
echo "<br>";

echo "2. Associative Array: ";
print_r($associativeArray);
echo "<br>";

echo "<hr>";  // Separator for better readability

// 3. Access Array Elements
echo "3. Accessing indexedArray[2]: " . $indexedArray[2] . "<br>";
echo "4. Accessing associativeArray['name']: " . $associativeArray['name'] . "<br>";

echo "<hr>";  // Separator for better readability

// 5. Add Elements to Array
$indexedArray[] = 60;  // Add an element at the end
echo "5. Add Element to Indexed Array: ";
print_r($indexedArray);
echo "<br>";

$associativeArray['country'] = "Malaysia";  // Add a key-value pair to associative array
echo "6. Add Element to Associative Array: ";
print_r($associativeArray);
echo "<br>";

echo "<hr>";  // Separator for better readability

// 7. Count Elements in Array
echo "7. Number of Elements in indexedArray: " . count($indexedArray) . "<br>";
echo "8. Number of Elements in associativeArray: " . count($associativeArray) . "<br>";

echo "<hr>";  // Separator for better readability

// 9. Check if an Element Exists in Array
if (in_array(30, $indexedArray)) {
    echo "9. Element 30 exists in indexedArray<br>";
} else {
    echo "9. Element 30 does not exist in indexedArray<br>";
}

if (array_key_exists('age', $associativeArray)) {
    echo "10. 'age' key exists in associativeArray<br>";
} else {
    echo "10. 'age' key does not exist in associativeArray<br>";
}

echo "<hr>";  // Separator for better readability

// 11. Remove Elements from Array
array_pop($indexedArray);  // Remove last element from the indexed array
echo "11. Remove Last Element from Indexed Array: ";
print_r($indexedArray);
echo "<br>";

unset($associativeArray['city']);  // Remove 'city' key-value pair from the associative array
echo "12. Remove 'city' from Associative Array: ";
print_r($associativeArray);
echo "<br>";

echo "<hr>";  // Separator for better readability

// 13. Merge Arrays
$mergedArray = array_merge($indexedArray, [70, 80]);
echo "13. Merged Array: ";
print_r($mergedArray);
echo "<br>";

echo "<hr>";  // Separator for better readability

// 14. Sort an Array
sort($indexedArray);  // Sort the indexed array in ascending order
echo "14. Sorted Indexed Array: ";
print_r($indexedArray);
echo "<br>";

ksort($associativeArray);  // Sort the associative array by key
echo "15. Sorted Associative Array by Key: ";
print_r($associativeArray);
echo "<br>";

echo "<hr>";  // Separator for better readability

// 16. Array Slice (Extract Part of Array)
$slicedArray = array_slice($indexedArray, 1, 3);  // Get a slice of indexedArray (start index 1, length 3)
echo "16. Sliced Array (start at index 1, length 3): ";
print_r($slicedArray);
echo "<br>";

?>
