<?php

function bucketSort(array $array): ?array
{

    if (!$array) {
        return null;
    }

    $length = count($array);
    $min = min($array);
    $max = max($array);

    $bucketsLength = $max - $min + 1;
    $buckets = array_fill(0, $bucketsLength, []);

    for ($i = 0; $i < $length; ++$i) {
        $buckets[$array[$i] - $min] = [$array[$i]];
    }

    $result = [];
    for ($k = 0; $k < $bucketsLength; ++$k) {
        if ($buckets[$k]) {
            array_push($result, $buckets[$k]);
        }
    }

    return $result;

}

$array = [83, 9, 47, 5, 19, 2];

print_r(bucketSort($array));