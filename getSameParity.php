<!-- Реализуйте функцию getSameParity, которая принимает 
на вход массив чисел и возвращает новый, состоящий из элементов, 
у которых такая же чётность, как и у первого элемента входного массива.

Примеры

getSameParity([]);        // => []
getSameParity([1, 2, 3]); // => [1, 3]
getSameParity([1, 2, 8]); // => [1]
getSameParity([2, 2, 8]); // => [2, 2, 8]
Подсказки
Проверка чётности - остаток от деления: $item % 2 == 0 — чётное число
Если на вход функции передан пустой массив, 
то она должна вернуть пустой массив. 
Проверить массив на пустоту можно с помощью функции empty -->

<?php

function getSameParity($array)
{
    if (empty($array)) {
        return $array;
    }
    $evenArray = [];
    $notEvenArray = [];
    foreach ($array as $element) {
        if ($element % 2 === 0) {
            $evenArray[] = $element;
        } else {
            $notEvenArray[] = $element;
        }
    }
    return ($array[0]% 2 === 0) ? $evenArray : $notEvenArray;
}

// function getSameParity($array)
// {
//     $filtered = array_filter($array, function ($element) use ($array) {
//         if ($array[0] % 2 === 0) {
//             return $element % 2 === 0;
//         }
//         return $element % 2 !== 0;
//     });
//     return array_values($filtered);
// }