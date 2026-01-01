<?php

$students = array("Anita", "Rahul", "Kiran", "Deepa", "Mahesh");

echo "Original array:\n";
print_r($students);


asort($students);
echo "<br>";
echo "\nArray in ascending order :\n";
print_r($students);


arsort($students);
echo "<br>";

echo "\nArray in descending order :\n";
print_r($students);
?>
