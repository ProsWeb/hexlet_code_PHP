<!-- Реализуйте функцию addPrefix, которая добавляет каждому элементу в массиве переданный префикс. Функция предназначена для работы со строковыми элементами. Аргументы:

Массив
Префикс
После префикса автоматически добавляется пробел.


use function App\Arrays\addPrefix;

$names = ['john', 'smith', 'karl'];

$newNames = addPrefix($names, 'Mr');
// => ['Mr john', 'Mr smith', 'Mr karl']; -->

<?php

function addPrefix($array, $prefix)
{
    $result = [];
    for ($i = 0; $i < sizeof($array); $i++) {
        $result[] = "{$prefix} {$array[$i]}";
    }
    return $result;
}