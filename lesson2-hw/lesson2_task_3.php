<?php
/*
    Реализовать основные 4 арифметические операции 
    в виде функций с двумя параметрами. 
    Обязательно использовать оператор return.
*/

//сложение
function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}

echo sum(3, 5) . '<br>';
echo sum(3, -5) . '<br>';

//вычетание
function subtract($arg1, $arg2) {
    return $arg1 - $arg2;
}

echo subtract(3, -5) . '<br>';
echo subtract(5, 3) . '<br>';

//умножение
function multiplier($arg1, $arg2) {
    return $arg1 * $arg2;
}

echo multiplier(3, -5) . '<br>';
echo multiplier(2, 3) . '<br>';

//деление
function division($arg1, $arg2) {
    return $arg1 / $arg2;
}

echo division(6, 5) . '<br>';
echo division(0, 3) . '<br>';