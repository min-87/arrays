<?php 
/*
Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.

<?php

checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'); // => true
checkIfBalanced('(4 + 3))'); // => false

*/

// BEGIN (write your solution here)
function checkIfBalanced($expression)
{
    $stack = [];
    $startSymbol = '(';
    $endSymbol = ')';    
    for ($i = 0; $i <= strlen($expression) - 1; $i++){
        $curr = $expression[$i];
        if ($curr == $startSymbol) {
            array_push($stack, $curr);
        } elseif ($curr == $endSymbol) {
                if (empty($stack)) {
                    return false;
                }
                array_pop($stack);
            }
    }
    return (count($stack) == 0);
}
// END

