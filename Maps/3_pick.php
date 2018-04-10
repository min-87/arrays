<?php
/*

Реализуйте функцию pick, которая извлекает из переданного массива все элементы по указанным ключам и возвращает новый массив. Аргументы:

    Исходный массив
    Массив ключей, по которым должны быть выбраны элементы (ключ и значение) из исходного массива, и на основе выбранных данных сформирован новый массив

<?php

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'
];
pick($data, ['user']); // → ['user' => 'ubuntu']
pick($data, ['user', 'os']); // → ['user' => 'ubuntu', 'os' => 'linux']

pick($data, []); // → []
pick($data, ['none']); // → []
*/


namespace App\Arrays;

//Variant 1

// BEGIN (write your solution here)
function pick($arr, $keys)
{
    $result=[];
    foreach ($keys as $key) {
        if (array_key_exists($key, $arr)) {
          $result[$key]=$arr[$key];
        }
    }
    return $result;
}
// END


//Variant 2
// BEGIN
function pick(array $data, array $keys)
{
    $result = [];
    foreach ($data as $key => $value) {
        if (in_array($key, $keys)) {
            $result[$key] = $value;
        }
    }

    return $result;
}
// END
