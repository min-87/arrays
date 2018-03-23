<?php 

/*
Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанного слова в предложении на последовательность $#%! и возвращает полученную строку. Аргументы:

    Текст
    Слово

Словом считается любая непрерывная последовательность символов включая любые спецсимволы.
*/


//Вариант 1

namespace App\Strings;

// BEGIN (write your solution here)
function makeCensored($sentense, $example)
{
    $censored = '$#%!';
    $words = explode(' ', $sentense);
    foreach ($words as $key => $word) {
        if ($word === $example) {
            $words[$key] = $censored;
        }
    }
    $result = implode(' ', $words);
    return $result;
}
// END

//Вариант 2

// BEGIN
function makeCensored(string $text, $stopWord)
{
    $words = explode(' ', $text);
    $result = [];
    foreach ($words as $word) {
        $result[] = $word === $stopWord ? '$#%!' : $word;
    }

    return implode(' ', $result);
}
// END
