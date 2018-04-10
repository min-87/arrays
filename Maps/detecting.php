<?php
/*
Реализуйте функцию findWhere, которая принимает на вход массив (элементы которого - ассоциативные массивы) и пары ключ-значение (тоже в виде массива), а возвращает первый элемент исходного массива, значения которого соответствуют переданным парам.

<?php

findWhere(
    [
        ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
        ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
        ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
        ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
    ],
    ['author' => 'Shakespeare', 'year' => 1611]
); // => ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611

*/


namespace App\Arrays;

// BEGIN (write your solution here)
function findWhere($arrMass, $pairs)
{
    $result=null;
    // дистракчеринг 
    //[$key1 => $values1, $key2 => $values2] = $pairs;
    $keys=array_keys($pairs);
    //[$key1, $key2] = $keys;
    foreach ($arrMass as $element) {
        if (($element[$key1]==$pairs[$key1])&&($element[$key2]==$pairs[$key2])) {
            //var_dump($element);
            return $element;
        }
    }
    return $result;
}
// END
