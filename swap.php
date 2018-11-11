<!-- Реализуйте функцию swap, которая меняет местами два элемента 
относительно переданного индекса. Например, если передан индекс 5, 
то функция меняет местами элементы, находящиеся по индексам 4 и 6.

Параметры функции:

Массив
Индекс
Если хотя бы одного из индексов не существует, функция возвращает исходный массив.

use function App\Arrays\swap;

$names = ['john', 'smith', 'karl'];

swap($names, 1);
// => ['karl', 'smith', 'john']

swap($names, 2);
// => ['john', 'smith', 'karl']

swap($names, 0);
// => ['john', 'smith', 'karl'] -->

<?php

// BEGIN (write your solution here)
// function swap($array, $index)
// {
//     if (!array_key_exists($index + 1, $array) || !array_key_exists($index - 1, $array)) {
//         return $array;
//     }
//     $result = [];
//     for ($i = 0; $i < sizeof($array); $i++) {
//         if (($index - 1) === $i) {
//             $result[] = $array[$index + 1];
//         } elseif (($index + 1) === $i) {
//             $result[] = $array[$index - 1];
//         } else {
//             $result[] = $array[$i];
//         }
//     }
//     return $result;
// }

function swap($array, $index)
{
    if (!array_key_exists($index + 1, $array) || !array_key_exists($index - 1, $array)) {
        return $array;
    }
    $result = [];
    for ($i = 0; $i < sizeof($array); $i++) {
        $temp = $array[$index - 1];
        $array[$index - 1] = $array[$index + 1];
        $array[$index + 1] = $temp;
    }
    return $array;
}