<!-- Реализуйте функцию findIndexOfNearest, которая принимает 
на вход массив чисел и искомое число. 
Задача функции — найти в массиве ближайшее число к искомому и вернуть его индекс в массиве.

findIndexOfNearest([], 2); // => null
findIndexOfNearest([15, 10, 3, 4], 0); // => 2 -->

<?php

function findIndexOfNearest($array, $num)
{
    if (empty($array)) {
        return null;
    }
    $result = 0;
    $acc = abs($num - $array[0]);
    foreach ($array as $key => $value) {
        $diff = abs($num - $value);
        if ($diff < $acc) {
            $acc = $diff;
            $result = $key;
        }
    }
    return $result;
}