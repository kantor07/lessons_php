<?php
/*
    Написать функцию, которая заменяет в строке пробелы на 
    подчеркивания и возвращает видоизмененную строчку.
*/

function replacing ($item_text) {
    $token_arr = array (" " => "_");
    return strtr($item_text, $token_arr);
}
echo replacing("Google и функция strtr() помогли мне сделать это задание");
