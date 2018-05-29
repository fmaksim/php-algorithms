<?php

function selectionSort(array $array): array
{
    $length = count($array);

    for ($i = 0; $i < $length; ++$i) {
        $minElement = $array[$i];
        $minElementIndex = $i;

        for ($j = $i + 1; $j < $length; ++$j) {
            if ($array[$j] < $minElement) {
                $minElement = $array[$j];
                $minElementIndex = $j;
            }
        }

        $tmp = $array[$i];
        $array[$i] = $array[$minElementIndex];
        $array[$minElementIndex] = $tmp;

    }

    return $array;

}

print_r(selectionSort([10, 5, 19, 100, 3, 1]));