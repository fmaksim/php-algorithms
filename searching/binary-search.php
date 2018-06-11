<?php

function binarySearch(array $array, $value): bool
{

    if (count($array) === 1) {

        if ($array[0] === $value) {
            return true;
        } else {
            return false;
        }

    }

    $middle = round(count($array) / 2);

    if ($array[$middle] === $value) {
        return true;
    }

    if ($array[$middle] >= $value) {
        return binarySearch(array_slice($array, 0, $middle), $value);
    } else {
        return binarySearch(array_slice($array, $middle), $value);
    }

}


var_dump(binarySearch([1, 5, 8, 9, 10, 70, 102], 11));