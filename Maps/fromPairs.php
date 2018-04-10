<?php
/*

Реализуйте функцию, которая принимает на вход массив, состоящий из массивов-пар, и возвращает ассоциативный массив, полученный из этих пар.

<?php

fromPairs([['fred', 30], ['barney', 40]]);
// → ['fred' => 30, 'barney' => 40]


*/


// BEGIN
function fromPairs(Array $data)
{
    $result = [];
    foreach ($data as [$key, $value]) {
        $result[$key] = $value;
    }

    return $result;
}
// END
