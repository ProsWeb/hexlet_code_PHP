<!-- Реализуйте функцию getDifference, которая принимает на вход два массива, 
а возвращает массив, составленный из элементов первого, которых нет во втором. 
Сделайте решение функциональным.

Эту задачу можно решить с помощью функции array_diff, 
но подразумевается что вы сделаете это без ее использования.

getDifference([2, 1], [2, 3]);
// → [1] -->

<?php

function getDifference($array1, $array2)
{
    $filtered = array_filter($array1, function ($element1) use ($array2) {
        return !in_array($element1, $array2);
    });
    return array_values($filtered);
}

// function getDifference($array1, $array2)
// {
//     function iter($array1, $array2, $result, $i)
//     {
//         if ($i == sizeof($array1)) {
//             return $result;
//         } elseif (!in_array($array1[$i], $array2)) {
//             $result[] = $array1[$i];
//             return iter($array1, $array2, $result, $i + 1);
//         } else {
//             return iter($array1, $array2, $result, $i + 1);
//         }
//     }
//     return iter($array1, $array2, $result = [], $i = 0);
// }
// END