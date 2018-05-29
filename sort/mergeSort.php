<?php

function merge(array $left, array $right): array
{
    $result = [];

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] > $right[0]) {
            array_push($result, $right[0]);
            $right = array_slice($right, 1);
        } else {
            array_push($result, $left[0]);
            $left = array_slice($left, 1);
        }
    }

    while (count($left) > 0) {
        array_push($result, $left[0]);
        $left = array_slice($left, 1);
    }

    while (count($right) > 0) {
        array_push($result, $right[0]);
        $right = array_slice($right, 1);
    }

    return $result;
}

function mergeSort(array $array): array
{

    if (count($array) === 1) {
        return $array;
    }

    $middle = round(count($array) / 2);
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);

}

print_r(mergeSort([85, 4, 107, 49, 290, 8, 2, 983, 7]));