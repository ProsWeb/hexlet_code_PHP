<!-- Реализуйте функцию multiArgs, которая возвращает произведение всех переданных аргументов. Вызванная без аргументов, должна вернуть null.

Пример:

null == multiArgs();
1 == multiArgs(1);
16 == multiArgs(2, 8); -->

<?php


// BEGIN (write your solution here)
// function multiArgs(...$numbers)
// {
//     if (empty($numbers)) {
//         return null;
//     }
//     return array_product($numbers);
// }

function multiArgs(...$numbers)
{
    if (empty($numbers)) {
        return null;
    }
    $result = 1;
    foreach ($numbers as $number) {
        $result *= $number;
    }
    return $result;
}
// END