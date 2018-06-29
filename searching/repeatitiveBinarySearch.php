<?php

function binarySearch(array $array, $value): int
{

    $low = 0;
    $high = count($array) - 1;
    $firstOccurence = -1;

    while ($high >= $low) {
        $middle = floor(($low + $high) / 2);

        if ($array[$middle] === $value) {
            $firstOccurence = $middle;
            $high = $middle - 1;
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

    return $firstOccurence;

}

var_dump(binarySearch([1, 5, 8, 9, 11, 70, 102, 102, 103, 105, 105], 105));