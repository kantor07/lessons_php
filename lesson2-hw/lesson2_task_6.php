<?php
/*
    *С помощью рекурсии организовать функцию возведения числа 
    в степень. Формат: function power($val, $pow), 
    где $val – заданное число, $pow – степень.
*/
function power($val, $pow) {
//если $pow = 0, выводим 1, так как любое число в сепени 0 равно 1
    if ($pow === 0) {
        return 1;
    }
//если $pow больше 0, делаем рекурсионный спуск
    else if($pow > 0) {  
        return $val * power($val, $pow-1);   
    }
//если значение $pow < 0, используем математическую формулу 
//для отрицательной степени
    else {
        return power(1/$val, -$pow); 
    }     
}

//вызываем функцию power()
echo power(3, -3);
