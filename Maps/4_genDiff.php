<?php
/*
Реализуйте функцию genDiff, которая возвраащет ассоциативный массив, в котором каждому ключу из исходных массивов соответствует одно из четырех значений added, deleted, changed и unchanged. Аргументы:

    Ассоциативный массив
    Ассоциативный массив

Расшифровка:

    Added - ключ отсутствовал в первом массиве, но был добавлен во второй
    Deleted - ключ был в первом массиве, но отсутствует во втором
    Changed - ключ присутствовал и в первом и втором массиве, но значения отличаются
    Unchanged - ключ присутствовал и в первом и втором массиве с одинаковыми значениями

<?php

use function App\Arrays\genDiff;

$result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
);
// => [
//     'one' => 'deleted',
//     'two' => 'changed'
//     'zero' => 'added',
//     'four' => 'unchanged',
// ];

*/

//Variant 1
namespace App\Arrays;

function union(array $data1, array $data2)
{
    return array_unique(array_merge($data1, $data2));
}

// BEGIN (write your solution here)
function genDiff($data1, $data2)
{
    $result=[];
    $keys=array_keys(union($data1, $data2));
    $keys1=array_keys($data1);
    $keys2=array_keys($data2);
    foreach ($keys as $key) {
       if (!in_array($key, $keys1)&&(in_array($key, $keys2))){
           $result[$key]='added';
       } elseif (in_array($key, $keys1)&&(!in_array($key, $keys2))) {
           $result[$key]='deleted';
       } elseif ($data1[$key] != $data2[$key]) {
           $result[$key]='changed';
       } elseif ($data1[$key] == $data2[$key]) {
           $result[$key]='unchanged';
       }
    }
    return $result;
}
// END

//Variant 2

// BEGIN
function genDiff(array $data1, array $data2)
{
    $keys = union(array_keys($data1), array_keys($data2));
    $result = [];
    foreach ($keys as $key) {
        if (array_key_exists($key, $data1) && array_key_exists($key, $data2)) {
            if ($data1[$key] === $data2[$key]) {
                $result[$key] = 'unchanged';
            } else {
                $result[$key] = 'changed';
            }
        } elseif (array_key_exists($key, $data2)) {
            $result[$key] = 'added';
        } elseif (array_key_exists($key, $data1)) {
            $result[$key] = 'deleted';
        }
    }

    return $result;
}
// END
