<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    for ($i = 1; $i <= $n; $i++) {
        $spaces = str_repeat(" ", $n - $i);
        $hashes = str_repeat("#", $i);
        echo $spaces . $hashes . "\n";
    }
}

$n = intval(trim(fgets(STDIN)));

staircase($n);
