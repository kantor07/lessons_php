<?php
/*
    С помощью цикла while вывести все числа в промежутке 
    от 0 до 100, которые делятся на 3 без остатка.
*/
$i = 0;
while ($i<=99) {
    $i++;
//выводим только числа, которые делятся на 3 без остатка
    if($i%3 === 0)
    echo "$i" . '<br>';
}