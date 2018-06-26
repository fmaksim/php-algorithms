<?php

function insertionSort(array $array): array
{
    $length = count($array);

    for ($i = 1; $i < $length; ++$i) {
        for ($j = $i; $j > 0; --$j) {
            if ($array[$j] < $array[$j - 1]) {
                list($array[$j], $array[$j - 1]) = [$array[$j - 1], $array[$j]];
            }

        }
    }
    return $array;
}

print_r(insertionSort([94, 5, 82, 9, 1, 104]));