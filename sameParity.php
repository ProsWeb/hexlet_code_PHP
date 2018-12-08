<!-- Определите функцию sameParity, которая принимает список построенный на парах и возвращает отфильтрованный список у которого четность каждого элемента совпадает с четностью первого элемента этого списка.

Пример:

l(1, 3) == l(1, 10, 3, 2)
Подсказки
Функция l это сокращенная запись для вложенных cons. Подробнее https://github.com/hexlet-components/php-pairs -->

<?php

use function Lists\l;
use function Lists\filter;
use function Lists\reverse;
use function Pairs\cons;
use function Pairs\car;
use function Pairs\cdr;

function sameParity($list)
{
    if ($list == null) {
        return null;
    }
    $filteredEven = filter(function ($item) {
        return $item % 2 == 0;
    }, $list);
    $filteredNotEven = filter(function ($item) {
        return $item % 2 != 0;
    }, $list);
    if (car($list) % 2 == 0) {
        return $filteredEven;
    } else {
        return $filteredNotEven;
    }
}