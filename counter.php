<?php
// File to store the page count
$counterFile = 'page_count.txt';

// Read the current count from the file
$currentCount = (file_exists($counterFile)) ? intval(file_get_contents($counterFile)) : 0;

// Increment the count
$currentCount++;

// Save the new count to the file
file_put_contents($counterFile, $currentCount);

// Display the count
echo "<p>This page has been viewed $currentCount times.</p>";
?>
