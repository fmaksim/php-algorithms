<?php

function quickSort(array $array): array
{
    $length = count($array);
    if ($length <= 1) {
        return $array;
    }

    $left = [];
    $right = [];

    $pivot = $array[0];

    for ($i = 1; $i < $length; ++$i) {
        if ($array[$i] < $pivot) {
            array_push($left, $array[$i]);
        } else {
            array_push($right, $array[$i]);
        }
    }

    return array_merge(quickSort($left), [$pivot], quickSort($right));

}

print_r(quickSort([83, 9, 47, 5, 19, 2]));