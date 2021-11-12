<?php
/*
    *Написать функцию, которая вычисляет текущее время и 
    возвращает его в формате с правильными склонениями, 
    например:
            22 часа 15 минут
            21 час 43 минуты 
*/

$hour = date('H')+3;
$minute = date('i');

//echo $hour . ':';
//echo $minute . '<br>';

function Now_time($hour, $minute) {
    switch ($hour) {
        case ($hour === '0'):
            echo "$hour часов" . ' ';
            break;
        case ($hour == 1 || $hour == 21):
            echo "$hour час" . ' ';
            break;
        case ($hour >= 5 && $hour <= 20):
            echo "$hour часов" . ' ';
            break;
        default:
            echo "$hour часа" . ' ';
            break;

    }
    switch ($minute) {
        case ($hour === '0'):
            echo "$hour минут" . '<br>';
            break;
        case ($minute == 1 || $minute == 21):
            echo "$minute минута" . '<br>';
            break;
        case ($minute >= 5 && $minute <= 20):
            echo "$minute минут" . '<br>';
            break;
        default:
            echo "$minute минуты" . '<br>';
            break;

    }
}

echo Now_time($hour, $minute);
