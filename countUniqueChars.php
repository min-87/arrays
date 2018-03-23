<?php
/*
Реализуйте функцию countUniqChars, которая считает количество уникальных символов в переданной строке.
*/

// Variant 1
namespace App\Strings;

// BEGIN (write your solution here)
function countUniqChars($s)
{
    return count(array_unique(str_split($s)));
}
// END

// Variant 2
// BEGIN
function countUniqChars($text)
{
    $chars = str_split($text);
    $count = 0;
    $uniqChars = [];
    foreach ($chars as $char) {
        if (in_array($char, $uniqChars)) {
            continue;
        }
        $uniqChars[] = $char;
        $count++;
    }

    return $count;
}
// END
