<!-- Реализуйте функцию get, которая излекает из массива элемент по указанному индексу, 
если индекс существует, либо возвращает значение по умолчанию. 
Функция принимает на вход три аргумента:

Массив
Индекс
Значение по умолчанию (которое по умолчанию равно null)
Пример:


use function App\Arrays\get;

$cities = ['moscow', 'london', 'berlin', 'porto'];

get($cities, 1); // => london
get($cities, 4); // => null
get($cities, 10, 'paris'); // => paris -->

<?php

function get($array, $index, $def = null)
{
    if ((sizeof($array) - 1) < $index || $index < 0) {
        return $def;
    }
    return $array[$index];
}