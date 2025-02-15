<?php
$myArray = ['a' => 1, 'b' => 2];

if (isset($myArray['c'])) {
  $myArray['c']++;
} else {
  $myArray['c'] = 1;
}

echo "Value of 'c': " . $myArray['c'] . "\n";

//Alternative using the null coalescing operator
$myArray['d'] = $myArray['d'] ?? 0; // assigns 0 to myArray['d'] if it's not set
$myArray['d']++;
echo "Value of 'd': " . $myArray['d'] . "\n";
?> 