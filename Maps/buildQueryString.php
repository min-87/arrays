<?php

/*
Реализуйте функцию, которая принимает на вход список параметров и возвращает сформированный query string из этих параметров:

<?php

buildQueryString(['per' => 10, 'page' => 1 ]);
// → page=1&per=10

Имена параметров в выходной строке должны располагаться в алфавитном порядке (то есть их нужно отсортировать).

*/

// BEGIN
function buildQueryString(Array $array)
{
    ksort($array);
    $result = [];
    foreach($array as $key => $value) {
        $result[] = "{$key}={$value}";
    }

    return implode('&', $result);
}
// END
