<?php
// Define the file path where the visitor count will be stored
$file = 'counter.txt';

// Check if the file exists
if (!file_exists($file)) {
    // If it doesn't exist, create the file and initialize the count to 0
    file_put_contents($file, 0);
}

// Read the current count from the file
$counter = (int)file_get_contents($file);

// Increment the count
$counter++;

// Write the new count back to the file
file_put_contents($file, $counter);

// Display the current count
echo "Visitor Count: " . $counter;
?>
