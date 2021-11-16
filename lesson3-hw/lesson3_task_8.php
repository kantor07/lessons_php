<?php
/*
    *Повторить третье задание, но вывести на экран только города,
    начинающиеся с буквы «К».
*/

$cities = [
    'Московская область' => [
        'Москва',
        'Балашиха',
        'Подольск',
        'Химки',
        'Мытищи',
        'Королев',
        'Люберцы',
        'Красногорск',
        'Электросталь',
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Гатчина',
        'Выборг',
        'Всеволжск',
        'Сосновый Бор',
        'Мурино',
        'Тихвин',
        'Сертолово',
        'Кириши',
    ],
    'Рязанская область' => [
        'Рязань',
        'Касимов',
        'Скопин',
        'Сасово',
        'Ряжск',
        'Рыбное',
        'Новомичуринск',
    ],
    'Амурская область' => [
        'Благовещенск',
        'Белогорск',
        'Свободный',
        'Тында',
        'Зея',
        'Шимановск',
        'Райчихинск',
        'Прогресс',
        'Циолковский',
    ],
    'Архангельская область' => [
        'Архангельск',
        'Коряжма',
        'Котлас',
        'Мирный',
        'Новодвинск',
        'Онега',
        'Северодвинск',
    ],
    'Астраханская область' => [
        'Астрахань',
        'Ахтубинск',
        'Знаменск',
        'Камызяк',
        'Нариманов',
        'Харабли',
    ],
];

//выводит все области даже если городов на букву "К" нет
foreach ($cities as $regions => $city) {
    echo '<ul><li>' . $regions . ':<br>' . '</ul></li>';
   foreach($city as $letters => $letter) {
       if(mb_substr($letter, 0, 1) == 'К') {
        echo '<ul><li>' .  $letter . '</ul></li>';
        }
   }
}