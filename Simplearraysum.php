<?php
// Function to compute the sum of array elements
function simpleArraySum($ar) {
    return array_sum($ar);
}

// Read input
$n = intval(trim(fgets(STDIN))); // size of array
$ar = array_map('intval', explode(" ", trim(fgets(STDIN)))); // array elements

// Call function and print result
echo simpleArraySum($ar) . "\n";
?>
