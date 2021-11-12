<?php
/*
    Присвоить переменной $а значение в промежутке [0..15]. 
    С помощью оператора switch организовать вывод чисел от $a 
    до 15.
*/

$a = 0;

//первый вариант
switch($a) {
    case 0:
        echo '0' . ' ';
    case 1:
        echo '1' . ' ';
    case 2:
        echo '2' . ' ';
    case 3:
        echo '3' . ' ';
    case 4:
        echo '4' . ' ';
    case 5:
        echo '5' . ' ';
    case 6:
        echo '6' . ' ';
    case 7:
        echo '7' . ' ';
    case 8:
        echo '8' . ' ';
    case 9:
        echo '9' . ' ';
    case 10:
        echo '10' . ' ';
    case 11:
        echo '11' . ' ';
    case 12:
        echo '12' . ' ';
    case 13:
        echo '13' . ' ';
    case 14:
        echo '14' . ' ';
    case 15:
        echo '15' . '<br>';
/*
Так и хочется поставить break, не знаю нужен он в конце или 
нет ведь это последний case
*/                       
}

//второй вариант
switch($a) {
    case 0:
        echo ($a++) . ' ';
    case 1:
        echo ($a++) . ' ';
    case 2:
        echo ($a++) . ' ';
    case 3:
        echo ($a++) . ' ';
    case 4:
        echo ($a++) . ' ';
    case 5:
        echo ($a++) . ' ';
    case 6:
        echo ($a++) . ' ';
    case 7:
        echo ($a++) . ' ';
    case 8:
        echo ($a++) . ' ';
    case 9:
        echo ($a++) . ' ';
    case 10:
        echo ($a++) . ' ';
    case 11:
        echo ($a++) . ' ';
    case 12:
        echo ($a++) . ' ';
    case 13:
        echo ($a++) . ' ';
    case 14:
        echo ($a++) . ' ';
    case 15:
        echo ($a) . '<br>';
}