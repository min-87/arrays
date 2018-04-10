<?php
/*



Реализуйте функцию getIn, которая извлекает из массива, с любой глубиной вложенности, значение по указанным ключам. Аргументы:

    Исходный массив
    Массив ключей, по которым ведется поиск значения

В случае, когда добраться до значения невозможно, то возвращается null

<?php

$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ]
];

getIn($data, ['undefined']); // => null
getIn($data, ['user']); // => 'ubuntu'
getIn($data, ['user', 'ubuntu']); // => null
getIn($data, ['hosts', 1, 'name']); // => 'web2'
getIn($data, ['hosts', 0]); // => ['name' => 'web1']


*/

namespace App\Arrays;

// BEGIN (write your solution here)
function getIn($date, $keys)
{
    $current=$date;
    foreach ($keys as $key) {
        if ((!is_array($current))||!array_key_exists($key, $current)) {
            return null;
        }
        else {
            $current=$current[$key];
        }
    }
    return $current;
}
// END

