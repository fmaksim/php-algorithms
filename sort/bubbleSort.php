<?php

function bubbleSort(array $array): array
{

    $length = count($array);
    for ($i = 1; $i < $length; ++$i) {
        for ($j = 0; $j < $length - 1; ++$j) {
            if ($array[$i] < $array[$j]) {
                $tmp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $tmp;
            }
        }
    }

    return $array;

}

print_r(bubbleSort([9, 7, 10, 2, 92, 5, 84, 5, 104, 1]));