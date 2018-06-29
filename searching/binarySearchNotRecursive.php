<?php

function binarySearch(array $array, $value): ?int
{

    $low = 0;
    $high = count($array) - 1;

    while ($high >= $low) {
        $middle = floor(($low + $high) / 2);

        if ($array[$middle] === $value) {
            return $middle;
        } else {
            if ($array[$middle] > $value) {
                $high = $middle - 1;
            } else {
                if ($array[$middle] < $value) {
                    $low = $middle + 1;
                }
            }
        }
    }

    return null;

}

var_dump(binarySearch([1, 5, 8, 9, 11, 70, 102], 102));