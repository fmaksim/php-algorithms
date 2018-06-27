<?php

function quickSort(array &$array, int $left, int $right): array
{

    if ($left < $right) {
        $q = partition($array, $left, $right);
        quickSort($array, $left, $q);
        quickSort($array, $q + 1, $right);
    }

    return $array;

}

function partition(&$array, $left, $right)
{

    $pivot = $array[$left];
    $leftIndex = $left - 1;
    $rightIndex = $right + 1;

    while (true) {

        do {
            $leftIndex++;
        } while ($pivot > $array[$leftIndex] && $pivot !== $array[$leftIndex]);

        do {
            $rightIndex--;
        } while ($pivot < $array[$rightIndex] && $pivot !== $array[$rightIndex]);

        if ($rightIndex > $leftIndex) {
            list($array[$leftIndex], $array[$rightIndex]) = [$array[$rightIndex], $array[$leftIndex]];
        } else {
            return $rightIndex;
        }

    }

}

$array = [83, 9, 47, 5, 19, 2];

print_r(quickSort($array, 0, count($array) - 1));