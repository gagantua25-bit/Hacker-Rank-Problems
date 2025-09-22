<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
     $n = count($arr);   // size of the matrix
    $primarySum = 0;    // sum of top-left -> bottom-right diagonal
    $secondarySum = 0;  // sum of top-right -> bottom-left diagonal

    for ($i = 0; $i < $n; $i++) {
        $primarySum += $arr[$i][$i];              // pick primary diagonal
        $secondarySum += $arr[$i][$n - 1 - $i];   // pick secondary diagonal
    }

    return abs($primarySum - $secondarySum);      // absolute difference
    }   



$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
