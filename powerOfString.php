<!-- «Мощность строки» — выдуманное нами понятие, которое показывает ее силу ;-). 
Вычисляется оно как сумма ASCII кодов букв строки.

file: Solution.php
Реализуйте функцию powerOfString, которая находит мощность строки.

Подсказки:
Сумма элементов массива — array_sum.
Преобразование строки в массив — str_split.
Получить ASCII код символа — ord. -->

<?php

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\map;

function powerOfString($str)
{
    $array = str_split($str);
    $result = map($array, function ($letter) {
        return ord($letter);
    });
    return array_sum($result);
}