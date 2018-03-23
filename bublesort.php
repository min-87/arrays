<?php
//bubble sort

function bubbleSort($arr)
{
    $size = sizeof($arr);
    do {
        $swapped = false;
        for ($i = 0; $i < $size - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $size--;
    } while ($swapped);

    return $arr;
}

print_r(bubbleSort([3, 2, 10, -2, 0]));
