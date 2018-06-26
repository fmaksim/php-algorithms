<?php

function bubbleSort(array $array): array
{

    $length = count($array);
    for ($i = 0; $i < $length; ++$i) {
        $swapped = false;
        for ($j = 0; $j < $length - 1; ++$j) {
            if ($array[$j] > $array[$j + 1]) {
                list($array[$j], $array[$j + 1]) = [$array[$j + 1], $array[$j]];
                $swapped = true;
            }
        }

        if ($swapped === false) {
            break;
        }
    }

    return $array;

}

print_r(bubbleSort([9, 7, 10, 2, 92, 5, 84, 5, 104, 1]));