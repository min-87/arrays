<?php
/*
Реализуйте функцию getSameCount, которая считает количество общих элементов для двух массивов. Аргументы:

    Первый массив
    Второй массив

<?php

getSameCount([], []); // => 0
getSameCount([1, 10, 3], [10, 100, 35, 1]); // => 2

*/

namespace App\Arrays;

// BEGIN (write your solution here)
function getSameCount($arr1, $arr2)
{
    $count = 0;
    foreach ($arr1 as $item1) {
        foreach ($arr2 as $item2) {
            if ($item1 === $item2) {
                $count +=1;
            }
        }
    }
    return $count;
}
// END
