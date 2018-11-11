<!-- Реализуйте функцию uniq, которая принимает, как аргумент, массив, и возвращает новый массив, в котором ни один элемент исходного массива не повторяется.

Пример:

<?php

uniq([]); // []
uniq([3, 4, 3]); // [3, 4]
uniq([12, 1, 1, 3, 5, 10, 3, 10]); // [12, 1, 3, 5, 10] -->

// BEGIN (write your solution here)
// function uniq($array)
// {
//     if (empty($array)) {
//         return $array;
//     }
//     $uniqArray = [];
//     for ($i = 0; $i < sizeof($array); $i++) {
//         if (!in_array($array[$i], $uniqArray)) {
//             $uniqArray[] = $array[$i];
//         }
//     }
//     return $uniqArray;
// }

function uniq($array)
{
    if (empty($array)) {
        return $array;
    }
    $uniqArray = [];
    foreach ($array as $value) {
        if (!in_array($value, $uniqArray)) {
            $uniqArray[] = $value;
        }
    }
    return $uniqArray;
}