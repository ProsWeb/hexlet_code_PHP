<!-- Реализуйте функцию solution, которая принимает на вход список чисел и выполняет следующие действия:

удаляет все числа, не кратные трем.
возводит оставшиеся числа в квадрат.
возвращает среднее арифметическое списка полученного после предыдущей операции.
Пример:

22.5 == solution(l(1, 3, 8, 6)) // (3 * 3 + 6 * 6) / 2 -->

<?php

require_once 'Pair.php';

use function App\Pair\filter;
use function App\Pair\map;
use function App\Pair\accumulate;
use function App\Pair\length;
use function App\Pair\listToString;

function solution($list)
{
    $filtered = filter($list, function ($item) {
        return $item % 3 == 0;
    });
    $mapped = map($filtered, function ($item) {
        return $item ** 2;
    });
    $reduced = accumulate($mapped, function ($item, $acc) use ($mapped) {
        return ($item + $acc);
    }, 0);
    return $reduced / length($mapped);
}