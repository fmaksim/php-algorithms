<?php

function selectionSort(array $array): array
{
    $length = count($array);

    for ($i = 0; $i < $length; ++$i) {
        $minElementIndex = $i;

        for ($j = $i + 1; $j < $length; ++$j) {
            if ($array[$j] < $array[$minElementIndex]) {
                $minElementIndex = $j;
            }
        }

        if ($i !== $minElementIndex) {
            list($array[$i], $array[$minElementIndex]) = [$array[$minElementIndex], $array[$i]];
        }

    }

    return $array;

}

print_r(selectionSort([10, 5, 19, 100, 3, 1]));