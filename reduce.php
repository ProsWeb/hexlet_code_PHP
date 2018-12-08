<!-- Реализуйте функцию solution которая принимает на вход список чисел и выполняет следующие действия:

округляет все числа в списке до верхней границы.
удаляет нечетные числа.
возвращает произведение оставшихся элементов.

solution(l(1.3, 3.01, 5.5, 100.9, 2.5)); // → 48.0
solution(l(1.49, 1.99, 9.9, 9.0, -1.2, -2.5)); // → -80.0 -->

<?php
use function Lists\map;
use function Lists\filter;
use function Lists\reduce;

function solution($list)
{
    $mapped = map(function ($item) {
        return ceil($item);
    }, $list);
    $filtered = filter(function ($item) {
        return $item % 2 == 0;
    }, $mapped);
    $reduced = reduce(function ($item, $acc) {
        return $item * $acc;
    }, $filtered, 1);
    return $reduced;
}