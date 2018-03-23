<?php

/*
Реализуйте функцию isContinuousSequence, которая проверяет, является ли переданная последовательность целых чисел - возрастающей непрерывно (не имеющей пропусков чисел). Например последовательность [4, 5, 6, 7] - непрерывная, а [0, 1, 3] - нет. Последовательность может начинаться с любого числа, главное условие - отсутствие пропусков чисел.

*/

// 1 Вариант

namespace App\Arrays;

// BEGIN (write your solution here)
function isContinuousSequence ($arr) 
{
    if (sizeof($arr) < 2) {
        // print_r ($arr);
        return false;
    }
    foreach ($arr as $key => $value) {
        if (array_key_exists($key-1, $arr) && ($value != $arr[$key - 1] + 1)) {
            // print_r ($arr);
            return false;
        }
    }
    return true;
}
// END

// 2 Вариант

function isContinuousSequence($coll)
{
    if (empty($coll)) {
        return false;
    }
    $start = $coll[0];
    foreach ($coll as $i => $item) {
        if ($start + $i !== $item) {
            return false;
        }
    }

    return true;
}


