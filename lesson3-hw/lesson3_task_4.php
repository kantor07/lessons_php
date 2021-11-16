<?php

/*
    Объявить массив, индексами которого являются буквы 
    русского языка, а значениями – соответствующие 
    латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’,
    ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
    Написать функцию транслитерации строк.
*/

function transliteration($item_text)
{ 
    $alfavit = array(
            'А'=>'A', 'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D',
            'Е'=>'E', 'Ё'=>'YO', 'Ж'=>'ZH', 'З'=>'Z', 'И'=>'I',
            'Й'=>'J', 'К'=>'K', 'Л'=>'L', 'М'=>'M', 'Н'=>'N',
            'О'=>'O', 'П'=>'P', 'Р'=>'R', 'С'=>'S', 'Т'=>'T',
            'У'=>'U', 'Ф'=>'F', 'Х'=>'KH', 'Ц'=>'CZ', 'Ч'=>'CH',
            'Ш'=>'SH', 'Щ'=>'SHH', 'Ъ'=>'``', 'Ы'=>'Y', 'Ь'=>'`',
            'Э'=>'E`', 'Ю'=>'YU', 'Я'=>'YA',
            "а"=>"a",  "б"=>"b",  "в"=>"v",  "г"=>"g",
            "д"=>"d",  "е"=>"e",  "ё"=>"yo", "ж"=>"j",
            "з"=>"z",  "и"=>"i",  "й"=>"i",  "к"=>"k",
             "л"=>"l",  "м"=>"m",  "н"=>"n",  "о"=>"o",
            "п"=>"p",  "р"=>"r",  "с"=>"s",  "т"=>"t",
            "у"=>"y",  "ф"=>"f",  "х"=>"h",  "ц"=>"c",
            "ч"=>"ch", "ш"=>"sh", "щ"=>"sh", "ы"=>"i",
            "э"=>"e",  "ю"=>"u",  "я"=>"ya",
            "ь"=>'`',   "ъ"=>'``'
    );
/*
Используем функцию strtr(), которая возвратит строку, 
в которой все ключи массива будут заменены их элементами.
*/
return strtr($item_text, $alfavit);
}
echo transliteration('Google и функция strtr() помогли мне сделать это задание');